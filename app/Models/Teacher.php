<?php

namespace App\Models;

use App\Models\Pivot;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;
    function schedule(){
        return $this->hasMany(Pivot::class,'teacher_id');
    }
    function maxtime(){
        return $this->slot()->orderBy('end_time','desc');
    }
}
