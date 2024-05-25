<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AboutUsPage extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =['name','vision','mission','created_by','uuid','description'];

    public $table ='about_us_pages';

    public function getStatusFormattedAttribute(){

        if ($this->status) {
            return "<span class='badge badge-pill badge-soft-success font-size-11'>Active</span>";
        } else {
            return "<span class='badge badge-pill badge-soft-danger font-size-11'>InActive</span>";
        }
        
    }

    public function getImagesAttribute(){
        $image =$this->gallery;
        $image =json_decode($image);
        return [
            'gallery1' =>$image[0]->gallery1,
            'gallery2' =>$image[1]->gallery2
        ];
    }
    
}
