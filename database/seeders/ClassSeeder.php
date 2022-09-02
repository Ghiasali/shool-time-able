<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->delete();
        $classes=[
            
           ['name'=>'I'],
           ['name'=>'II'],
           ['name'=>'III'],
           ['name'=>'IV'],
           ['name'=>'V'],
          
        ];
        Grade::insert($classes);
    }
}
