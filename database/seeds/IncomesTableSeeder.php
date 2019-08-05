<?php

use Illuminate\Database\Seeder;

class IncomesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('incomes')->delete();

        DB::table('incomes')->insert([
            'income' => 'No Income',
        ]);
        DB::table('incomes')->insert([
            'income' => 'Rs 0 - 24,999 Monthly',
        ]);
        DB::table('incomes')->insert([
            'income' => 'Rs 25,000 - 49,999 Monthly',
        ]);
        DB::table('incomes')->insert([
            'income' => 'Rs 50,000 - 74,999 Monthly',
        ]);
        DB::table('incomes')->insert([
            'income' => 'Rs 75,000 - 99,999 Monthly',
        ]);
        DB::table('incomes')->insert([
            'income' => 'Rs 1,00,000 - 1,24,999 Monthly',
        ]);
        DB::table('incomes')->insert([
            'income' => 'Rs 1,25,000 - 1,49,999 Monthly',
        ]);
        DB::table('incomes')->insert([
            'income' => 'Rs 1,50,000 - 1,74,999 Monthly',
        ]);
        DB::table('incomes')->insert([
            'income' => 'Rs 1,75,000 - 1,99,999 Monthly',
        ]);

        DB::table('incomes')->insert([
            'income' => ' Greater than Rs 1,99,999  Monthly',
        ]);
    }
}
