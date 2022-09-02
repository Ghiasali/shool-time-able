<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;
    protected $fillable=[
        'school_start_time',
        'school_end_time',
        'break_start_time',
        'break_end_time',
        'period_time'
    ];
}
