<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BookTraining;
use App\Models\MessageUs;
use App\Models\PaymentLog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function bookings(){
        $bookings =BookTraining::latest()->get();
        return view('backend.other_pages.bookings',compact('bookings'));
    }

    public function allOrders(){
        $orders =PaymentLog::with('purchaser_name')->get();
        return view('backend.other_pages.orders',compact('orders'));
    }

    public function messageUs(){
        $messages =MessageUs::latest()->get();
        return view('backend.other_pages.message_us',compact('messages'));
    }
}
