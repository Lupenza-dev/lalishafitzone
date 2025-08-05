<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProgramRequest;
use App\Models\Category;
use App\Models\Program;
use App\Models\ProgramPicture;
use App\Traits\FileImportTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Spatie\Image\Enums\Fit;
use Spatie\Image\Image;
use Str;

class ProgramController extends Controller
{
    use FileImportTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs =Program::with('category')->latest()->get();
        return view('backend.program.list',compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories =Category::latest()->get();
        return view('backend.program.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProgramRequest $request)
    {
        $valid =$request->validated();
        Log::debug(json_encode($valid));
        try {
            DB::transaction(function() use ($valid,$request){
                $program =Program::create([
                    'name'        =>$valid['name'],
                    'category_id' =>$valid['category_id'],
                    'price'       =>$valid['price'],
                    'caption'     =>$valid['caption'],
                    'description' =>$valid['description'],
                    'uuid'        =>(string)Str::orderedUuid(),
                    'created_by'  =>Auth::user()->id,
                ]);

                if ($request->hasFile('cover')) {
                     $program->addMedia($request['cover'])->toMediaCollection('images');
                }

                if ($request->hasFile('video')) {
                    $program->addMedia($request['video'])->toMediaCollection('videos');
                }

                if ($request->hasFile('package')) {
                     $program->addMedia($request['package'])->toMediaCollection('packages');
                    // $program->package =$this->importFile($request->file('package'),$program->name);
                    // $program->save();
                }

            });
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'success' =>true,
                'errors'  =>$th->getMessage()
            ],500);
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
        $program_uuid =$request->uuid;
        $program =Program::where('uuid',$program_uuid)->first();

        $program_pictures =ProgramPicture::where('program_id',$program->id)->delete();
        $program->delete();

        $program->clearMediaCollection('images');
        $program->clearMediaCollection('videos');
        $program->clearMediaCollection('packages');


        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully'
        ],200);
    }

    public function upload(Request $request)
    {
        $paths = [];
        if ($request->file('images')) {
            foreach ($request->file('images') as $file) {
                $paths[] = $file->store('tmp', 'public');
            }
        }

        if ($request->file('cover')) {
            foreach ($request->file('cover') as $file) {
                $paths[] = $file->store('tmp', 'public');
            }
        }
        Log::debug($paths);
        return $paths;
    }

    public function revert(Request $request)
    {
        Storage::disk('public')->delete($request->getContent());
    }
}
