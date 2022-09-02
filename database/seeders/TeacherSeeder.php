<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('teachers')->delete();
        $teachers=[
           ['name'=>'amjad','qualification'=>'MSC'],
           ['name'=>'John','qualification'=>'BA'],
           ['name'=>'Chris','qualification'=>'MSC'],
           ['name'=>'Hina','qualification'=>'BCOM'],
           ['name'=>'Hina','qualification'=>'BCOM']
        ];
        Teacher::insert($teachers);
    }
}
