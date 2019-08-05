<?php

use Illuminate\Database\Seeder;

class JamaatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jamaats')->delete();


        DB::table('jamaats')->insert([
            'jamaat' => 'Ahle Hadees',
        ]);
        DB::table('jamaats')->insert([
            'jamaat' => 'Barelvi',
        ]);
        DB::table('jamaats')->insert([
            'jamaat' => 'Deobandi',
        ]);
        DB::table('jamaats')->insert([
            'jamaat' => 'Buddhist',
        ]);
        DB::table('jamaats')->insert([
            'jamaat' => 'Sufi',
        ]);
        DB::table('jamaats')->insert([
            'jamaat' => 'Tablighi Jamaat',
        ]);
    }
}
