<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CallBackController extends Controller
{
    public function callBack(Request $request){
        Log::info($request->all());
    }
}
