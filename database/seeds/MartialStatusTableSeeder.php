<?php

use Illuminate\Database\Seeder;

class MartialStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('martial_statuses')->delete();

        DB::table('martial_statuses')->insert([
            'martial_status' => 'Never Married',
        ]);
        DB::table('martial_statuses')->insert([
            'martial_status' => 'Awaiting Divorce',
        ]);
        DB::table('martial_statuses')->insert([
            'martial_status' => 'Divorced',
        ]);
        DB::table('martial_statuses')->insert([
            'martial_status' => 'Widowed',
        ]);
        DB::table('martial_statuses')->insert([
            'martial_status' => 'Annulled',
        ]);
        DB::table('martial_statuses')->insert([
            'martial_status' => 'Married',
        ]);
    }
}
