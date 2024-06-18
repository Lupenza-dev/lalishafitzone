<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PaymentLog;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class UserController extends Controller
{
    public function index(){
        //  return Auth::user()->paymentLogs;
        return view('frontend.pages.my_account');
    }

    public function downloadProgram($uuid){
        $program = Program::where('uuid', $uuid)->first();
    
        if (!$program) {
            return response()->json(['error' => 'Program not found.'], 404);
        }
    
        $filePath = 'uploads/'. $program->package; // Path relative to the storage/app/public directory
        return response()->download(storage_path($filePath));
        // Debugging: Log the resolved path to see where it is looking for the file
        $resolvedPath = storage_path('app/public/' . $filePath);
        \Log::info('Resolved Path: ' . $resolvedPath);
    
        // Use the public disk to check the file
        if (!Storage::disk('public')->exists($filePath)) {
            return response()->json(['error' => 'File not found at ' . $resolvedPath], 404);
        }
    
        $fileName = basename($filePath);
    
        // Use the public disk to download the file
        return Storage::disk('public')->download($filePath, $fileName);

    }
}
