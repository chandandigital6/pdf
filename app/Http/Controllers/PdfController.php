<?php

namespace App\Http\Controllers;

use App\Http\Requests\PdfRequest;
use App\Models\Pdf;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PdfController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $pdf = Pdf::query();

        if (!empty($keyword)) {
            $pdf->where('title', 'like', "%$keyword%");
        }
        $pdfData = $pdf->paginate(5);

        return view('pdf.index',compact('pdfData'));
    }

    public function create(){
        return view('pdf.create');
    }

    public function store(PdfRequest $request){
//        dd($request);
        $pdf=Pdf::create($request->all());
        $image = $request->file('image_pdf')->store('public/pdf');

        $pdf->image_pdf = str_replace('public/', '', $image);
        $pdf->save();
        return redirect()->route('pdf.index')->with('success', 'Pdf  created successfully.');
    }

    public function edit(Pdf $pdf){

        return view('pdf.edit',compact('pdf'));
    }

    public function update(Pdf $pdf , PdfRequest $request){
        $pdfData = $request->all();

        if ($request->hasFile('image_pdf')) {
            $imagePath = $request->file('image_pdf')->store('public/pdf');
            $pdfData['image_pdf'] = str_replace('public/', '', $imagePath);
        }

        $pdf->update($pdfData);

        return redirect()->route('pdf.index')->with('success', 'pdf item successfully updated');
    }


    public function delete(Pdf $pdf){
        $pdf->delete();
        return redirect()->route('pdf.index')->with('error','Successfully  pdf items deleted');

    }

    public function show(Pdf $pdf){

        return view('pdf.show',compact('pdf'));
    }


    public function generateQrCode($id)
    {
        // Fetch the pdf entry by ID
        $pdf = Pdf::findOrFail($id);

        // Generate the QR code for the image_pdf path
        $filePath = asset('storage/' . $pdf->image_pdf);
        $qrCode = QrCode::size(300)->generate($filePath);

        // Specify the path to save the QR code image
        $qrCodePath = public_path('qr_codes');
        if (!file_exists($qrCodePath)) {
            mkdir($qrCodePath, 0777, true); // Create the directory if it doesn't exist
        }
        $fileName = 'qr_code_' . $pdf->id . '.png';
        $qrCodeImagePath = $qrCodePath . '/' . $fileName;

        // Save the QR code image
        file_put_contents($qrCodeImagePath, $qrCode);

        // Return a response to download the QR code image with the correct content type
        return response()->download($qrCodeImagePath, $fileName, ['Content-Type' => 'image/png'])->deleteFileAfterSend(true);
    }
}
