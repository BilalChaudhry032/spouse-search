<?php

use Illuminate\Database\Seeder;

class OccupationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('occupations')->delete();

        DB::table('occupations')->insert([
            'occupation' => 'Looking For a Job',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Not Working',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Actor/Model',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Advertising Professional',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Agent',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Air Hostess',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Analyst',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Architect',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Banking Professional',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Beautician',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Business Person',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Chartered Accountant',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Civil Service',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Consultant',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Corporate Community',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Corporate Planning',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Customer Service',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Cyber /Network Security',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Defence',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Doctor',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Education Professional',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Engineeer - Non-IT',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Farming',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Fashion Designer',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Film Professional',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Financial Service',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Fitness Professional',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Govt. Service',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'HR Professional',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Hardware/Telecom',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Healthcare Professional',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Hotels/Hospitality Provider',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Interior Designer',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Journalist',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Lawyer/Legal Professional',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Manager',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Marketing Professional',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Media Professional',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Merchant Navy',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'NGO/Social Services',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Nurse',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Office Admin',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Operator/Technician',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Physiotherapist',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Pilot',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Police',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Private Security',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Product Manager',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Professor/Lecturer',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Program Manager',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Product Manager - IT',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Psychologist',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Research Professional',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Sale Professional',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Scientist',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Secretary/Front Office',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Security Professional',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Self Employed',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Software Professional',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Sports Person',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Student',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Teacher',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Top Management',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'UI/UX Designer',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Web/Graphic',
        ]);
        DB::table('occupations')->insert([
            'occupation' => 'Other',
        ]);
    }
}
