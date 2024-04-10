<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait FileImportTrait
{
    public function importFile($file,$resource_name){
     
            $name =str_replace(' ','',$resource_name).'_'.time(). '.' .$file->getClientOriginalExtension();
            // Storage::disk('public')->put("", $name);

            $content = file_get_contents($file->getRealPath());
            Storage::disk('public')->put('' . $name, $content);
            return $name;
          
    }
}
