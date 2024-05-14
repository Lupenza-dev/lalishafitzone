<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentLog extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =['amount','external_id','vendor_id','program_id','purchaser','status','uuid'];

    public function getProgramNameAttribute(){
        // dd(json_decode($this->program_id));
        $programs =Program::whereIn('id',json_decode($this->program_id))->pluck('name')->all();
        // dd($programs);
        // dd($programs);
         return implode('<br>',$programs);
    }

    public function getStatusFormatAttribute(){

        switch ($this->status) {
            case 1:
                $label ="<span class='badge rounded-pill bg-success custom-badge'>Paid</span>";
                break;
            case 2:
                $label ="<span class='badge rounded-pill bg-info custom-badge'>On Progress</span>";
                break;
            case 3:
                $label ="<span class='badge rounded-pill bg-danger custom-badge'>Rejected</span>";
                break;
            default:
                 $label ="<span class='badge rounded-pill bg-primary custom-badge'>Pending</span>";
                break;
        }
        return $label;
    }

    public function purchaser_name(){
        return $this->hasOne(User::class,'id','purchaser');
    }


}
