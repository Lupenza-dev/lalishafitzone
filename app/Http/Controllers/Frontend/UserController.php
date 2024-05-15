<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PaymentLog;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ZipArchive;

class UserController extends Controller
{
    public function index(){
        //  return Auth::user()->paymentLogs;
        return view('frontend.pages.my_account');
    }

    public function downloadProgram($uuid){
        $payment =PaymentLog::where('uuid',$uuid)->first();

        $files =Program::whereIn('id',json_decode($payment->program_id))->get();
       
        $zipFileName = 'files-' . time() . '.zip';
        $zipPath = storage_path('app/' . $zipFileName);

        // Creating a new ZIP archive
        $zip = new ZipArchive;
        if ($zip->open($zipPath, ZipArchive::CREATE) === TRUE) {
            // Add files to the ZIP file
            foreach ($files as $file) {
                $filePath = storage_path('storage/uploads/' . $file->package);
                if (file_exists($filePath)) {
                    // Add the file to the zip
                    $zip->addFile($filePath, $file->package);
                }
            }
            // Close and save the archive
            $zip->close();
        } else {
            abort(500, 'Cannot create a zip file.');
        }

        // Check if the ZIP file was created
        if (!file_exists($zipPath)) {
            abort(500, 'Zip file does not exist.');
        }

        return response()->download($zipPath)->deleteFileAfterSend(true);
    }
}
