<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory,SoftDeletes;


    protected $fillable =['title','caption','news_category_id','created_by','uuid','description'];

    public $table ='news';

    public function getStatusFormattedAttribute(){

        if ($this->status) {
            return "<span class='badge badge-pill badge-soft-success font-size-11'>Active</span>";
        } else {
            return "<span class='badge badge-pill badge-soft-danger font-size-11'>InActive</span>";
        }
        
    }

    public function category(){
        return $this->hasOne(NewsCategory::class,'id','news_category_id');
    }

    public function getCaptionFormattedAttribute(){
        return $this->truncateString($this->caption,150);
    }

    function truncateString($string, $limit, $break=" ", $pad="...") {
        // Return with no change if the string is shorter than the limit
        if(strlen($string) <= $limit) return $string;
      
        // Find the last space within the limit
        $breakpoint = strpos($string, $break, $limit);
      
        // If no space is found, try to take the whole string
        if(false === $breakpoint) {
          $breakpoint = $limit;
        }
      
        $output = substr($string, 0, $breakpoint);
      
        // Add the pad string if the original string is longer than the output
        if(strlen($string) > strlen($output)) {
          $output .= $pad;
        }
      
        return $output;
      }
}
