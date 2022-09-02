<?php

namespace App\Models;

use App\Models\Pivot;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PeriodSlot extends Model
{
    use HasFactory;
    function schedule(){
        return $this->hasMany(Pivot::class,'period_slot_id');
    }
}
