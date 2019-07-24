<?php

use Illuminate\Database\Seeder;

class ApplicantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Applicant::insert([
            'first_name' => 'Pranto',
            'last_name' => 'Abir',
            'email' => 'prantoabir420@gmail.com',
            'password' => bcrypt('11223344'),
        ]);
    }
}
