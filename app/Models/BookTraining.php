<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookTraining extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =['firstname','lastname','start_date','end_date','phone_number','email','description','uuid'];
}
