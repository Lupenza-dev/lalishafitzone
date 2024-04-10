<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable =['category_id','name','description','caption','price','cover_page','status','created_by','uuid'];

    public function getStatusFormattedAttribute(){

        if ($this->status) {
            return "<span class='badge badge-pill badge-soft-success font-size-11'>Active</span>";
        } else {
            return "<span class='badge badge-pill badge-soft-danger font-size-11'>InActive</span>";
        }
        
    }

    public function category(){
        return $this->hasOne(Category::class,'id','category_id');
    }

    public function getCoverAttribute(){
        $image =$this->cover_page;
        $image =json_decode($image);
        return [
            'cover1' =>$image[0]->cover1,
            'cover2' =>$image[1]->cover2
        ];
    }

    public function pictures(){
        return $this->hasMany(ProgramPicture::class);
    }
}
