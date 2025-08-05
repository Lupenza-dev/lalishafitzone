<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\NewsCategoryResource;
use App\Http\Resources\NewsResource;
use App\Http\Resources\ProgramResource;
use App\Http\Resources\SliderResource;
use App\Models\AboutUsPage;
use App\Models\Category;
use App\Models\Faq;
use App\Models\FaqCategory;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\Program;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;

class BackendDataController extends Controller
{
    /**
     * Get all about us pages
     * @return JsonResponse
     */
    public function getAboutUs(): JsonResponse
    {
        $about = AboutUsPage::latest()->get();
        return response()->json(['data' => $about]);
    }

    /**
     * Get all categories
     */
    public function getCategories(): ResourceCollection
    {
        $categories = Category::latest()->get();
        return CategoryResource::collection($categories);
    }

    /**
     * Get all news categories
     */
    public function getNewsCategories(): ResourceCollection
    {
        $categories = NewsCategory::withCount('news')->latest()->get();
        return NewsCategoryResource::collection($categories);
    }

    /**
     * Get all FAQs
     * @return JsonResponse
     */
    public function getFaqs(): JsonResponse
    {
        $faqs = Faq::with('category')->latest()->get();
        return response()->json([
            'success' => true,
            'data' => $faqs
        ]);
    }

    /**
     * Get all FAQ categories
     * @return JsonResponse
     */
    public function getFaqCategories(): JsonResponse
    {
        $categories = FaqCategory::latest()->get();
        return response()->json([
            'success' => true,
            'data' => $categories
        ]);
    }

    /**
     * Get all news
     */
    public function getNews(): ResourceCollection
    {
        $news = News::with(['category', 'media'])->latest()->get();
        return NewsResource::collection($news);
    }

    /**
     * Get all programs
     */
    public function getPrograms(): ResourceCollection
    {
        $programs = Program::with(['category', 'pictures.media'])->latest()->get();
        return ProgramResource::collection($programs);
    }

    /**
     * Get all sliders with media URLs
     */
    public function getSliders(): ResourceCollection
    {
        $sliders = Slider::with('media')->latest()->get();
        return SliderResource::collection($sliders);
    }

    /**
     * Get all testimonials
     * @return JsonResponse
     */
    public function getTestimonials(): JsonResponse
    {
        $testimonials = Testimonial::latest()->get();
        return response()->json([
            'success' => true,
            'data' => $testimonials
        ]);
    }

    /**
     * Get all data in one request
     */
    public function getAllData(): JsonResponse
    {
        return response()->json([
            'data' => [
                'about' => AboutUsPage::latest()->get(),
                'categories' => CategoryResource::collection(Category::latest()->get()),
                'news_categories' => NewsCategoryResource::collection(NewsCategory::withCount('news')->latest()->get()),
                'faqs' => Faq::with('category')->latest()->get(),
                'faq_categories' => FaqCategory::latest()->get(),
                'news' => NewsResource::collection(News::with(['category', 'media'])->get()),
                'programs' => ProgramResource::collection(Program::with(['category', 'pictures.media'])->get()),
                'sliders' => SliderResource::collection(Slider::with('media')->get()),
                'testimonials' => Testimonial::latest()->get(),
            ]
        ]);
    }
}
