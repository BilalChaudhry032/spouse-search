<?php

use Illuminate\Database\Seeder;



class ReligionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('religions')->delete();

        DB::table('religions')->insert([
            'religion' => 'Muslim',
        ]);
        DB::table('religions')->insert([
            'religion' => 'Christian',
        ]);
        DB::table('religions')->insert([
            'religion' => 'Sikh',
        ]);
        DB::table('religions')->insert([
            'religion' => 'Buddhist',
        ]);
        DB::table('religions')->insert([
            'religion' => 'Jain',
        ]);
        DB::table('religions')->insert([
            'religion' => 'Parsi',
        ]);
        DB::table('religions')->insert([
            'religion' => 'Hindu',
        ]);
        DB::table('religions')->insert([
            'religion' => 'Other',
        ]);
    }
}
