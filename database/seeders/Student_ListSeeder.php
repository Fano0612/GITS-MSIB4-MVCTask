<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Student_ListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('student_lists')->insert([
        'id'=> 205150207111022,
        'name'=>"Fano",
        'class'=> 2020,
        'status'=> 'active',
      ]);
    }
}
