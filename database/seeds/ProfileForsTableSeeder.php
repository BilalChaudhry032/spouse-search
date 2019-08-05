<?php

use Illuminate\Database\Seeder;

class ProfileForsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profile_fors')->delete();

        DB::table('profile_fors')->insert([
            'user_relation' => 'Self',
        ]);
        DB::table('profile_fors')->insert([
            'user_relation' => 'Son',
        ]);
        DB::table('profile_fors')->insert([
            'user_relation' => 'Daughter',
        ]);
        DB::table('profile_fors')->insert([
            'user_relation' => 'Brother',
        ]);
        DB::table('profile_fors')->insert([
            'user_relation' => 'Sister',
        ]);
        DB::table('profile_fors')->insert([
            'user_relation' => 'Other',
        ]);
    }
}
