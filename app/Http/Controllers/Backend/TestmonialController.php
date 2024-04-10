<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Testmonial;
use App\Traits\FileImportTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Str;

class TestmonialController extends Controller
{
    use FileImportTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testmonials =Testmonial::latest()->get();
        return view('backend.testmonial.list',compact('testmonials'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.testmonial.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid =$request->validate([
            'name'          =>['required'],
            'designation'   =>'required',
            'description'   =>'required',
            'image'         =>'required',
        ]);

        $slider =Testmonial::create([
            'name'     =>$valid['name'],
            'designation' =>$valid['designation'],
            'description'   =>$valid['description'],
            'uuid'          =>(string)Str::orderedUuid(),
            'created_by'    =>Auth::user()->id,
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
    public function destroy(string $id)
    {
        //
    }
}
