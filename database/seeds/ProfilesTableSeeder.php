<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Profile::insert([
            'applicant_id' => 1,
            'image' => 'default.png',
            'resume' => 'default.pdf',
            'skill' => '------',
        ]);
    }
}
