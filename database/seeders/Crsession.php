<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Carbon;

class Crsession extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
           
            'session_id' => '1',
          
            
            
            'created_at' => Carbon::now()-> format('y-m-d h:i:s' ),
            'updated_at' => Carbon::now()-> format('y-m-d h:i:s' )
           
        ];
    
    DB::table('crsessions') -> insert($user);
    
    }
}
