<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Carbon;
class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        
        for($i=0; $i<8; $i++):
        $user = [
           
            'name' => $faker-> realText(15),
            
            
            
            'created_at' => Carbon::now()-> format('y-m-d h:i:s' ),
            'updated_at' => Carbon::now()-> format('y-m-d h:i:s' )
           
        ];
    
    DB::table('semesters') -> insert($user);
    
        endfor;
    }
}
