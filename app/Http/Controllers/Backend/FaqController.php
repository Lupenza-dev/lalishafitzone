<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::with('category')->latest()->get();
        return view('backend.faq.list', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = FaqCategory::where('status', true)->get();
        return view('backend.faq.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate the request
            $validator = Validator::make($request->all(), [
                'faq_category_id' => 'required|exists:faq_categories,id',
                'question' => 'required|string|max:1000',
                'answer' => 'required|string',
                'status' => 'required|boolean',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation error',
                    'errors' => $validator->errors()
                ], 422);
            }

            // Create the FAQ
            $faq = Faq::create([
                'faq_category_id' => $request->faq_category_id,
                'question' => $request->question,
                'answer' => $request->answer,
                'status' => $request->status ?? true,
                'created_by' => Auth::id(),
                'uuid' => (string) Str::orderedUuid(),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'FAQ created successfully!',
                'data' => $faq
            ]);

        } catch (\Exception $e) {
            \Log::error('Error creating FAQ: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while creating the FAQ.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($uuid)
    {
        try {
            $faq = Faq::where('uuid', $uuid)->firstOrFail();
            $categories = FaqCategory::where('status', true)->get();
            return view('backend.faq.edit', compact('faq', 'categories'));
        } catch (\Exception $e) {
            return redirect()->route('faqs.index')
                ->with('error', 'FAQ not found.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $uuid)
    {
        try {
            $faq = Faq::where('uuid', $uuid)->firstOrFail();

            // Validate the request
            $validated = $request->validate([
                'faq_category_id' => 'required|exists:faq_categories,id',
                'question' => 'required|string|max:1000',
                'answer' => 'required|string',
                'status' => 'sometimes|boolean',
            ]);

            // Update the FAQ
            $faq->update([
                'faq_category_id' => $validated['faq_category_id'],
                'question' => $validated['question'],
                'answer' => $validated['answer'],
                'status' => $request->has('status') ? 1 : 0,
            ]);

            return redirect()->route('faqs.index')
                ->with('success', 'FAQ updated successfully!');

        } catch (\Exception $e) {
            \Log::error('Error updating FAQ: ' . $e->getMessage());
            return back()
                ->withInput()
                ->with('error', 'An error occurred while updating the FAQ.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            $request->validate([
                'uuid' => 'required|exists:faqs,uuid'
            ]);

            $faq = Faq::where('uuid', $request->uuid)->first();
            
            if ($faq) {
                $faq->delete();
                
                return response()->json([
                    'success' => true,
                    'message' => 'FAQ deleted successfully!'
                ]);
            }

            return response()->json([
                'success' => false,
                'message' => 'FAQ not found!'
            ], 404);

        } catch (\Exception $e) {
            \Log::error('Error deleting FAQ: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while deleting the FAQ.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
