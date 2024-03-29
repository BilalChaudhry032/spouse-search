<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();

        DB::table('admins')->insert([
            'name' => 'Muhammad Usman',
            'email' => 'usman@spouse-search.com',
            'password' => Hash::make('spouse-search@786')
        ]);
        DB::table('admins')->insert([
            'name' => 'Muhammad Usman',
            'email' => 'usman@spouse-search.com',
            'password' => Hash::make('spouse-search@786')
        ]);
        DB::table('admins')->insert([
            'name' => 'Muhammad Usman',
            'email' => 'usman@spouse-search.com',
            'password' => Hash::make('spouse-search@786')
        ]);
    }
}
