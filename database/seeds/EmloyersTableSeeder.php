<?php

use Illuminate\Database\Seeder;

class EmloyersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Employer::insert([
            'first_name' => 'M.R',
            'last_name' => 'Pranto',
            'business_name' => 'Software Sell',
            'company_name' => 'Namespace It',
            'email' => 'prantoabir1@gmail.com',
            'password' => bcrypt('11223344'),
        ]);
    }
}
