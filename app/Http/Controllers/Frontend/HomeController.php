<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BookTraining;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\Program;
use App\Models\Slider;
use App\Models\Testmonial;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Str;

class HomeController extends Controller
{
    public function index(){
       // return Cart::content();
        $data['programs']    =Program::with('category')->latest()->get();
        $data['testmonials'] =Testmonial::latest()->get();
        $data['news']        =News::with('category')->latest()->get();
        $data['sliders']     =Slider::latest()->get();
        return view('frontend.pages.home',$data);
    }

    public function loginForm(){
        return view('auth.login');
    }

    public function registerForm(){
        return view('auth.register');
    }

    public function bookTrainer(){
        return view('frontend.pages.book_trainer');
    }

    public function bookTraining(Request $request){
        $valid =$request->validate([
            'firstname'  =>'required',
            'lastname'   =>'required',
            'start_date' =>'required',
            'end_date'   =>'required',
            'description'=>'required',
            'email'      =>'required',
            'phone_number'=>'required',
        ]);

        BookTraining::create([
            'firstname' =>$valid['firstname'],
            'lastname' =>$valid['lastname'],
            'start_date' =>$valid['start_date'],
            'end_date' =>$valid['end_date'],
            'description' =>$valid['description'],
            'email' =>$valid['email'],
            'phone_number' =>$valid['phone_number'],
            'uuid' =>(string)Str::orderedUuid(),
        ]);

        return response()->json([
            'success' =>true,
            'message' =>'You have Successfully make a booking please wait for Trainer to contact with you'
        ],200);


    }

    public function addcart(Program $program){
        Cart::add($program->id,$program->name,1,$program->price,
        [
        'image'=>$program->cover['cover1'],
        'category'=>$program->category?->name,
        'caption' =>$program->caption
    ]);
        return redirect()->back();
    }

    public function removeCart($rowId){
        Cart::remove($rowId);
        return redirect()->back();

    }

    public function programView($uuid){
        $program =Program::with('category','pictures')->where('uuid',$uuid)->first();
        return view('frontend.pages.program',compact('program'));
    }

    public function blogView($uuid){
        $blog =News::where('uuid',$uuid)->first();
        $categories =NewsCategory::withCount('news')->latest()->get();
        $other_blogs =News::latest()->get();
        return view('frontend.pages.blog',compact('blog','categories','other_blogs'));
    }

    public function blogs(){
        $blogs =News::latest()->get();
        return view('frontend.pages.blogs',compact('blogs'));
    }

    public function allPrograms($cat_name){
        $programs =Program::latest()->get();
        return view('frontend.pages.all_programs',compact('programs'));
    }

    public function contactUs(){
        return view('frontend.pages.contact');
    }

    public function cartcheckout(){
        $big_carts =Cart::content();
        return view('frontend.pages.check_out',compact('big_carts'));
    }
}
