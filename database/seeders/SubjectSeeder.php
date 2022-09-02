<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->delete();
        $subjects=[
            
           ['name'=>'Math','code'=>'330'],
           ['name'=>'Urdo','code'=>'002'],
           ['name'=>'English','code'=>'233'],
           ['name'=>'Pak study','code'=>'44'],
        ];
        Subject::insert($subjects);
    }
}
