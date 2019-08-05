<?php

use Illuminate\Database\Seeder;

class MotherLanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mother_languages')->delete();

        DB::table('mother_languages')->insert([
            'mother_language' => 'Urdu',
        ]);
        DB::table('mother_languages')->insert([
            'mother_language' => 'English',
        ]);
        DB::table('mother_languages')->insert([
            'mother_language' => 'Punjabi',
        ]);
        DB::table('mother_languages')->insert([
            'mother_language' => 'Arabic',
        ]);
        DB::table('mother_languages')->insert([
            'mother_language' => 'Bihari',
        ]);
        DB::table('mother_languages')->insert([
            'mother_language' => 'Hindi',
        ]);
        DB::table('mother_languages')->insert([
            'mother_language' => 'Kashmiri',
        ]);
        DB::table('mother_languages')->insert([
            'mother_language' => 'Pashto',
        ]);
        DB::table('mother_languages')->insert([
            'mother_language' => 'Sindhi',
        ]);
        DB::table('mother_languages')->insert([
            'mother_language' => 'Marathi',
        ]);
        DB::table('mother_languages')->insert([
            'mother_language' => 'Tamil',
        ]);
        DB::table('mother_languages')->insert([
            'mother_language' => 'Bangali',
        ]);
        DB::table('mother_languages')->insert([
            'mother_language' => 'Other',
        ]);
    }
}
