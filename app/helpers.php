<?php

use App\Models\Pivot;
use App\Models\Teacher;
use Illuminate\Support\Facades\DB;

  function get_subject_teacher($slot_id,$class_id)
    {
        
        return Pivot::where('period_slot_id',$slot_id)->where('grade_id',$class_id)->with(['teacher','subject'])->first();
    }
