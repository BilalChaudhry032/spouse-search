<?php

use Illuminate\Database\Seeder;

class CastsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('casts')->delete();


        DB::table('casts')->insert([
            'cast' => 'Ansari',
        ]);
        DB::table('casts')->insert([
            'cast' => 'Arian',
        ]);
        DB::table('casts')->insert([
            'cast' => 'Awan',
        ]);
        DB::table('casts')->insert([
            'cast' => 'Barhai',
        ]);
        DB::table('casts')->insert([
            'cast' => 'Bohra',
        ]);
        DB::table('casts')->insert([
            'cast' => 'Chikwa',
        ]);
        DB::table('casts')->insert([
            'cast' => 'Chaudhri',
        ]);
        DB::table('casts')->insert([
            'cast' => 'Dekkani',
        ]);
        DB::table('casts')->insert([
            'cast' => 'Dhunia',
        ]);
        DB::table('casts')->insert([
            'cast' => 'Hajjam',
        ]);
        DB::table('casts')->insert([
            'cast' => 'Hanafi',
        ]);
        DB::table('casts')->insert([
            'cast' => 'Jut',
        ]);
        DB::table('casts')->insert([
            'cast' => 'Kamboh',
        ]);
        DB::table('casts')->insert([
            'cast' => 'Kumhar',
        ]);
        DB::table('casts')->insert([
            'cast' => 'Lebbai',
        ]);
        DB::table('casts')->insert([
            'cast' => 'Malik',
        ]);
        DB::table('casts')->insert([
            'cast' => 'Memon',
        ]);

        DB::table('casts')->insert([
            'cast' => 'Mughal',
        ]);
        DB::table('casts')->insert([
            'cast' => 'Pathan',
        ]);

        DB::table('casts')->insert([
            'cast' => 'Khan',
        ]);

        DB::table('casts')->insert([
            'cast' => 'Butt',
        ]);
        DB::table('casts')->insert([
            'cast' => 'Kashmiri',
        ]);

        DB::table('casts')->insert([
            'cast' => 'Mughal',
        ]);
        DB::table('casts')->insert([
            'cast' => 'Rajput',
        ]);
        DB::table('casts')->insert([
            'cast' => 'Syed',
        ]);
        DB::table('casts')->insert([
            'cast' => 'Bhatii',
        ]);

        DB::table('casts')->insert([
            'cast' => 'Qureshi',
        ]);

        DB::table('casts')->insert([
            'cast' => 'Sheikh',
        ]);

        DB::table('casts')->insert([
            'cast' => 'Syed',
        ]);

        DB::table('casts')->insert([
            'cast' => 'Teli',
        ]);

        DB::table('casts')->insert([
            'cast' => 'Other',
        ]);
    }
}
