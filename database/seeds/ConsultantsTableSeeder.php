<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ConsultantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('consultants')->delete();

        DB::table('consultants')->insert([
            'name' => 'Muhammad Usman',
            'email' => 'usman@spouse-search.com',
            'password' => Hash::make('spouse-search@786'),
            'phone' => '03100040369',
            'business_name' => 'System Generated',

        ]);
    }
}
