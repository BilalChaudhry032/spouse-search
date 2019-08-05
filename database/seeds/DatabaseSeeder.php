<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(ReligionsTableSeeder::class);

        $this->call(SectsTableSeeder::class);

        $this->call(JamaatsTableSeeder::class);

        $this->call(CastsTableSeeder::class);

        $this->call(MartialStatusTableSeeder::class);

        $this->call(HeightsTableSeeder::class);

        //$this->call(CountriesTableSeeder::class);

        //$this->call(StatesTableSeeder::class);

       // $this->call(CitiesTableSeeder::class);

        $this->call(ProfileForsTableSeeder::class);

        $this->call(MotherLanguageTableSeeder::class);

        $this->call(EducationTableSeeder::class);

        $this->call(GendersTableSeeder::class);

        $this->call(OccupationTableSeeder::class);

        $this->call(IncomesTableSeeder::class);


    }
}
