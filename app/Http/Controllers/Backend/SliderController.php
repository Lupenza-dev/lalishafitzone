<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Traits\FileImportTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Str;

class SliderController extends Controller
{
    use FileImportTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders =Slider::latest()->get();
        return view('backend.slider.list',compact('sliders'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.slider.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid =$request->validate([
            'title'     =>['required','unique:sliders,title'],
            'sub_title'  =>'required',
            'caption'   =>'required',
            'image'     =>'required',
        ]);

        $slider =Slider::create([
            'title'     =>$valid['title'],
            'sub_title' =>$valid['sub_title'],
            'caption'   =>$valid['caption'],
            'uuid'      =>(string)Str::orderedUuid(),
            'created_by' =>Auth::user()->id,
        ]);

        if ($request->hasFile('image')) {
            $slider->image =$this->importFile($request->file('image'),$slider->title);
            $slider->save();
        }

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $uuid =$request->uuid;
        $category =Slider::where('uuid',$uuid)->delete();

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ],200);
    }
}
