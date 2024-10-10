<?php

namespace App\Http\Controllers;

use App\Http\Requests\CasteRequest;
use App\Models\Caste;
use Illuminate\Http\Request;

class CasteController extends Controller
{

    public function index(Request $request){
        $keyword = $request->input('keyword');
        $caste = Caste::query();

        if (!empty($keyword)) {
            $caste->where('title', 'like', "%$keyword%");
        }
        $casteData = $caste->paginate(5);

        return view('caste.index',compact(var_name: 'casteData'));
    }

    public function create(){
        return view('caste.create');
    }

    public function store(CasteRequest $request){
//        dd($request);
        $caste=Caste::create($request->all());
        // $image = $request->file('image_caste')->store('public/caste');

        // $caste->image_caste = str_replace('public/', '', $image);
        // $caste->save();
        return redirect()->route('caste.index')->with('success', 'caste  created successfully.');
    }

    public function edit(Caste $caste){

        return view('caste.edit',compact('caste'));
    }
    public function show(Caste $caste){

        return view('caste.show',compact('caste'));
    }
    public function update(Caste $caste , CasteRequest $request){
        $casteData = $request->all();

        // if ($request->hasFile('image_caste')) {
        //     $imagePath = $request->file('image_caste')->store('public/caste');
        //     $casteData['image_caste'] = str_replace('public/', '', $imagePath);
        // }

        $caste->update($casteData);

        return redirect()->route('caste.index')->with('success', 'caste item successfully updated');
    }


    public function delete(Caste $caste){
        $caste->delete();
        return redirect()->route('caste.index')->with('error','Successfully  caste items deleted');

    }
}
