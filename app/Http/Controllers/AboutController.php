<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AboutController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $about = About::query();

        if (!empty($keyword)) {
            $about->where('title', 'like', "%$keyword%");
        }
        $aboutData = $about->paginate(5);

        return view('about.index',compact('aboutData'));
    }

    public function create(){
        return view('about.create');
    }

    public function store(AboutRequest $request){
//        dd($request);
        $about=About::create($request->all());
        $image = $request->file('image_pdf')->store('public/about');

        $about->image_pdf = str_replace('public/', '', $image);
        $about->save();
        return redirect()->route('about.index')->with('success', 'About  created successfully.');
    }

    public function edit(About $about){

        return view('about.edit',compact('about'));
    }

    public function update(About $about , AboutRequest $request){
        $aboutData = $request->all();

        if ($request->hasFile('image_pdf')) {
            $imagePath = $request->file('image_pdf')->store('public/about');
            $aboutData['image_pdf'] = str_replace('public/', '', $imagePath);
        }

        $about->update($aboutData);

        return redirect()->route('about.index')->with('success', 'about item successfully updated');
    }


    public function delete(About $about){
        $about->delete();
        return redirect()->route('about.index')->with('error','Successfully  about items deleted');

    }
    public function generateQrCode($id)
    {
        // Fetch the about entry by ID
        $about = About::findOrFail($id);

        // Generate the QR code for the image_pdf path
        $filePath = asset('storage/' . $about->image_pdf);
        $qrCode = QrCode::size(300)->generate($filePath);

        // Specify the path to save the QR code image
        $qrCodePath = public_path('qr_codes');
        if (!file_exists($qrCodePath)) {
            mkdir($qrCodePath, 0777, true); // Create the directory if it doesn't exist
        }
        $fileName = 'qr_code_' . $about->id . '.png';
        $qrCodeImagePath = $qrCodePath . '/' . $fileName;

        // Save the QR code image
        file_put_contents($qrCodeImagePath, $qrCode);

        // Return a response to download the QR code image with the correct content type
        return response()->download($qrCodeImagePath, $fileName, ['Content-Type' => 'image/png'])->deleteFileAfterSend(true);
    }

}
