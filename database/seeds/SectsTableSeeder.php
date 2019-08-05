<?php

use Illuminate\Database\Seeder;

class SectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sects')->delete();

        DB::table('sects')->insert([
            'sect' => 'Sunni',
        ]);
        DB::table('sects')->insert([
            'sect' => 'Al-e-Hadees',
        ]);

        DB::table('sects')->insert([
            'sect' => 'Shia',
        ]);

    }
}
