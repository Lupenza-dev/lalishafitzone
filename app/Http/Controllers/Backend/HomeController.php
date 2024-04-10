<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BookTraining;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function bookings(){
        $bookings =BookTraining::latest()->get();
        return view('backend.other_pages.bookings',compact('bookings'));
    }
}
