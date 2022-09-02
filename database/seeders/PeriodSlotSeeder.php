<?php

namespace Database\Seeders;

use App\Models\PeriodSlot;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PeriodSlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('period_slots')->delete();
        $slots=[
            
           ['start_time'=>'08:30:00','end_time'=>'09:00:00'],
           ['start_time'=>'09:00:00','end_time'=>'09:30:00'],
           ['start_time'=>'09:30:00','end_time'=>'10:00:00'],
           ['start_time'=>'10:00:00','end_time'=>'010:30:00'],
           ['start_time'=>'10:30:00','end_time'=>'11:00:00'],
           ['start_time'=>'12:00:00','end_time'=>'12:30:00'],
           ['start_time'=>'12:30:00','end_time'=>'13:00:00'],
        ];
        PeriodSlot::insert($slots);
    }
}
