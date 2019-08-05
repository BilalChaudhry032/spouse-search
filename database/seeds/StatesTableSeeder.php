<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->delete();

        DB::table('states')->insert([
            'state' => 'Punjab',
        ]);
        DB::table('states')->insert([
            'state' => 'Sindh',
        ]);
        DB::table('states')->insert([
            'state' => 'Jammu-Kashmir',
        ]);
        DB::table('states')->insert([
            'state' => 'Khyber Pakhtunkhwa',
        ]);
        DB::table('states')->insert([
            'state' => 'Balochistan',
        ]);
        DB::table('states')->insert([
            'state' => 'Gilgit-Baltistan',
        ]);
    }
}
