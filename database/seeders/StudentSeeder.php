<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim'=>'2031710068',
            'name'=>'Faiza Nur Abida',
            'class'=>'2F',
            'department'=>'TI-MI',
            'phone_number'=>'085853957585',
        ]);
        DB::table('students')->insert([
            'nim'=>'2031710178',
            'name'=>'Ghulam Al-Fakhri',
            'class'=>'2F',
            'department'=>'TI-MI',
            'phone_number'=>'086482947077',
        ]);
        DB::table('students')->insert([
            'nim'=>'2031710034',
            'name'=>'Jihan Rahadatul Aisy',
            'class'=>'2F',
            'department'=>'TI-MI',
            'phone_number'=>'082764387444',
        ]);
    }
}
