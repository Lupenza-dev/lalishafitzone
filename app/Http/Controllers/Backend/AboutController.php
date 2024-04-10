<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AboutUsPage;
use App\Traits\FileImportTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Str;

class AboutController extends Controller
{
    use FileImportTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $abouts =AboutUsPage::latest()->get();
        return view('backend.other_pages.about_us',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.other_pages.add_about');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid =$request->validate([
            'name' =>['required','unique:about_us_pages,name'],
            'vision' =>'required',
            'mission' =>'required',
            'cover'   =>'required',
            'images'  =>'required',
            'description' =>'required'
        ]);

        $about =AboutUsPage::create([
            'name'        =>$valid['name'],
            'vision'      =>$valid['vision'],
            'mission'     =>$valid['mission'],
            'description' =>$valid['description'],
            'uuid'        =>(string)Str::orderedUuid(),
            'created_by'  =>Auth::user()->id,
        ]);

        if ($request->hasFile('cover')) {
            $about->cover_image =$this->importFile($request->file('cover'),$about->name);
            $about->save();
        }

        if ($request->hasFile('images')) {
            $files = array();
            $x =1;
            foreach ($request->file('images') as $file) {
                if ($file->isValid()) {
                    $files[] = [
                        'gallery'.$x =>$this->importFile($file,$about->name)
                    ];
                }
                $x++;
            }
        
            if (count($files) > 0) {
                $about->gallery = json_encode($files);
                $about->save();
            }
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
