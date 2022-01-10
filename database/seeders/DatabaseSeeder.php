<?php

namespace Database\Seeders;

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
        $this -> call([

            
            DeptSeeder::class,
            UserSeeder::class,
            SemesterSeeder::class,
            SessionSeeder::class,
            TransactionSeeder::class
           
        ]);
    }
}
