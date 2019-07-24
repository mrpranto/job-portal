<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(EmloyersTableSeeder::class);
         $this->call(ApplicantsTableSeeder::class);
         $this->call(JobsTableSeeder::class);
         $this->call(ProfilesTableSeeder::class);
         $this->call(JobAppliesTableSeeder::class);
    }
}
