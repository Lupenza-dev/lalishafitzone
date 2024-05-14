<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\NewsSubscriber;
use App\Traits\FileImportTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Str;

class NewsController extends Controller
{
    use FileImportTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news =News::with('category')->latest()->get();
        return view('backend.other_pages.news',compact('news'));
    }

    public function newsSubcribers(){
        $news =NewsSubscriber::latest()->get();
        return view('backend.other_pages.news_subscribers',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories =NewsCategory::latest()->get();
        return view('backend.other_pages.add_news',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid =$request->validate([
            'title' =>['required'],
            'category_id' =>'required',
            'caption' =>'required',
            'cover'   =>'required',
            'description' =>'required'
        ]);

        $news =News::create([
            'title'         =>$valid['title'],
            'news_category_id'   =>$valid['category_id'],
            'caption'       =>$valid['caption'],
            'description'   =>$valid['description'],
            'uuid'          =>(string)Str::orderedUuid(),
            'created_by'    =>Auth::user()->id,
        ]);

        if ($request->hasFile('cover')) {
            $news->image =$this->importFile($request->file('cover'),$news->title);
            $news->save();
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
        $category =News::where('uuid',$uuid)->delete();
        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ],200);
    }

    public function destroyCategory(Request $request){
        $uuid =$request->uuid;
        $category =NewsCategory::where('uuid',$uuid)->delete();
        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ],200);
    }

    public function storeNewsLetter(Request $request){
        $valid =$request->validate([
            'email' =>'required'
        ]);

        NewsSubscriber::updateOrCreate([
            'email' =>$valid['email']
        ],[
            'uuid'       =>(string)Str::orderedUuid(),
            'ip_address' => $request->ip(),
            'deleted_at' =>null
        ]);

        return response()->json([
            'success' =>true,
            'message' =>'You have successfully subscribed our news letter'
        ],200);
    }
}
