<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FaqCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Str;

class FaqCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = FaqCategory::latest()->get();
        return view('backend.faq_category.list', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => ['required', 'unique:faq_categories,name'],
            'description' => 'required'
        ]);

        FaqCategory::create([
            'name' => ucwords($valid['name']),
            'description' => $valid['description'],
            'created_by' => Auth::user()->id,
            'uuid' => (string) Str::orderedUuid()
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Action Done Successfully'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $request->validate([
            'uuid' => 'required|exists:faq_categories,uuid'
        ]);

        $category = FaqCategory::where('uuid', $request->uuid)->first();
        
        if ($category) {
            $category->delete();
            
            return response()->json([
                'success' => true,
                'message' => 'FAQ Category deleted successfully!'
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'FAQ Category not found!'
        ], 404);
    }
}
