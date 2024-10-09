<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermanentRequest;
use App\Models\Permanent;
use Illuminate\Http\Request;

class PermanentController extends Controller
{

    public function index(Request $request){
        $keyword = $request->input('keyword');
        $permanent = Permanent::query();

        if (!empty($keyword)) {
            $permanent->where('title', 'like', "%$keyword%");
        }
        $permanentData = $permanent->paginate(5);

        return view('permanent.index',compact(var_name: 'permanentData'));
    }

    public function create(){
        return view('permanent.create');
    }

    public function store(PermanentRequest $request){
//        dd($request);
        $permanent=Permanent::create($request->all());
        // $image = $request->file('image_permanent')->store('public/permanent');

        // $permanent->image_permanent = str_replace('public/', '', $image);
        // $permanent->save();
        return redirect()->route('permanent.index')->with('success', 'permanent  created successfully.');
    }

    public function edit(Permanent $permanent){

        return view('permanent.edit',compact('permanent'));
    }
    public function show(Permanent $permanent){

        return view('permanent.show',compact('permanent'));
    }
    public function update(Permanent $permanent , PermanentRequest $request){
        $permanentData = $request->all();

        // if ($request->hasFile('image_permanent')) {
        //     $imagePath = $request->file('image_permanent')->store('public/permanent');
        //     $permanentData['image_permanent'] = str_replace('public/', '', $imagePath);
        // }

        $permanent->update($permanentData);

        return redirect()->route('permanent.index')->with('success', 'permanent item successfully updated');
    }


    public function delete(Permanent $permanent){
        $permanent->delete();
        return redirect()->route('permanent.index')->with('error','Successfully  permanent items deleted');

    }

    // public function show($url)
    // {
    //     // Fetch the permanent record by the `url` field
    //     $permanent = permanent::where('url', $url)->firstOrFail();
    //     if(!$permanent){
    //         abort(404);
    //     }
    //     // Pass the permanent record to the Blade view
    //     return view('permanent.show', compact('permanent'));
    // }


    // public function showQr($url)
    // {
    //     // Fetch the permanent record by the `url` field
    //     $permanent = permanent::where('url', $url)->firstOrFail();

    //     // Pass the permanent's URL to the Blade view for QR generation
    //     return view('permanent.showqr', ['url' => $permanent->url]);
    // }



    // public function generateQrCode($id)
    // {
    //     // Fetch the permanent entry by ID
    //     $permanent = permanent::findOrFail($id);

    //     // Generate the QR code for the image_permanent path
    //     $filePath = asset('storage/' . $permanent->image_permanent);
    //     $qrCode = QrCode::size(300)->generate($filePath);

    //     // Specify the path to save the QR code image
    //     $qrCodePath = public_path('qr_codes');
    //     if (!file_exists($qrCodePath)) {
    //         mkdir($qrCodePath, 0777, true); // Create the directory if it doesn't exist
    //     }
    //     $fileName = 'qr_code_' . $permanent->id . '.png';
    //     $qrCodeImagePath = $qrCodePath . '/' . $fileName;

    //     // Save the QR code image
    //     file_put_contents($qrCodeImagePath, $qrCode);

    //     // Return a response to download the QR code image with the correct content type
    //     return response()->download($qrCodeImagePath, $fileName, ['Content-Type' => 'image/png'])->deleteFileAfterSend(true);
    // }
}
