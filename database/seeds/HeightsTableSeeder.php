<?php

use Illuminate\Database\Seeder;

class HeightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('heights')->delete();

        DB::table('heights')->insert([
            'height' => '4\'6\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '4\'7\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '4\'8\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '4\'9\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '4\'10\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '4\'11\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '5\'0\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '5\'1\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '5\'2\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '5\'3\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '5\'4\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '5\'5\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '5\'6\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '5\'7\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '5\'8\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '5\'9\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '5\'10\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '5\'11\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '6\'0\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '6\'1\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '6\'2\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '6\'3\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '6\'4\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '6\'5\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '6\'6\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '6\'7\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '6\'8\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '6\'9\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '6\'10\'\'',
        ]);
        DB::table('heights')->insert([
            'height' => '6\'11\'\'',
        ]);
    }
}
