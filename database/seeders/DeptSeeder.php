<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Carbon;

class DeptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        
        for($i=0; $i<10; $i++):
        $user = [
           
            'name' => $faker-> realText(40),
            'course_name' => $faker ->text(50),

            'p1'=>25000,
            'p2'=>25000,
            'p3'=>25000,
            'p4'=>25000,
            'p5'=>25000,
            'p6'=>25000,
            'p7'=>25000,
            'p8'=>25000,
            'total'=>125000,
            
            
            'created_at' => Carbon::now()-> format('y-m-d h:i:s' ),
            'updated_at' => Carbon::now()-> format('y-m-d h:i:s' )
           
        ];
    
    DB::table('departments') -> insert($user);
    
        endfor;
    }
}
