<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Testmonial extends Model implements HasMedia
{
    use HasFactory, SoftDeletes,InteractsWithMedia;

    protected $fillable =['name','designation','description','uuid','created_by','image'];

    public function getStatusFormattedAttribute(){

        if ($this->status) {
            return "<span class='badge badge-pill badge-soft-success font-size-11'>Active</span>";
        } else {
            return "<span class='badge badge-pill badge-soft-danger font-size-11'>InActive</span>";
        }
        
    }
}
