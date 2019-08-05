<?php

use Illuminate\Database\Seeder;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education')->delete();

        DB::table('education')->insert([
            'education' => 'Under Matriculation',
        ]);
        DB::table('education')->insert([
            'education' => 'Matriculation',
        ]);
        DB::table('education')->insert([
            'education' => 'Inter',
        ]);
        DB::table('education')->insert([
            'education' => 'Bachelors/Under Graduate',
        ]);
        DB::table('education')->insert([
            'education' => 'Master',
        ]);
        DB::table('education')->insert([
            'education' => 'MPhil',
        ]);
        DB::table('education')->insert([
            'education' => 'Ph.d',
        ]);
        DB::table('education')->insert([
            'education' => 'ACCA',
        ]);
        DB::table('education')->insert([
            'education' => 'CA',
        ]);
        DB::table('education')->insert([
            'education' => 'ENGINEERING',
        ]);
        DB::table('education')->insert([
            'education' => 'MBBS Doctor',
        ]);
        DB::table('education')->insert([
            'education' => 'BBA',
        ]);
        DB::table('education')->insert([
            'education' => 'MBBA',
        ]);
    }
}
