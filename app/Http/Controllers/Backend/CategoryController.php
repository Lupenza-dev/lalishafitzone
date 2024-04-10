<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories =Category::latest()->get();
        return view('backend.category.list',compact('categories'));
    }

    public function newsCategory(){
        $categories =NewsCategory::latest()->get();
        return view('backend.category.news_list',compact('categories'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid =$request->validate([
            'name' =>['required','unique:categories,name'],
            'description' =>'required'
        ]);

        Category::updateOrCreate([
            'name' =>ucwords($valid['name'])
        ],[
            'description' =>$valid['description'],
            'created_by'  =>Auth::user()->id,
            'uuid'        =>(string)Str::orderedUuid()
        ]);

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ],200);

    }

    public function storeNewsCategory(Request $request)
    {
        $valid =$request->validate([
            'name' =>['required','unique:news_categories,name'],
            'description' =>'required'
        ]);

        NewsCategory::updateOrCreate([
            'name' =>ucwords($valid['name'])
        ],[
            'description' =>$valid['description'],
            'created_by'  =>Auth::user()->id,
            'uuid'        =>(string)Str::orderedUuid()
        ]);

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
