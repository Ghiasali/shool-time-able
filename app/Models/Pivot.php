<?php

namespace App\Models;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pivot extends Model
{
    protected $table = 'pivot';
    protected $fillable=['teacher_id','grade_id','subject_id','period_slot_id'];
    use HasFactory;
    function subject(){
        return $this->belongsTo(Subject::class,'subject_id');
    }
    function teacher(){
        return $this->belongsTo(Teacher::class,'teacher_id');
    }
    function class(){
        return $this->belongsTo(Grade::class,'grade_id');
    }
    function slot(){
        return $this->belongsTo(PeriodSlot::class,'period_slot_id');
    }
}
