<?php

use Illuminate\Database\Seeder;

class JobAppliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\JobApply::insert([
            'applicant_id' => 1,
            'job_id' => 3,
            'employer_id' => 1,
        ]);
    }
}
