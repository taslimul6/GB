<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Carbon;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $user = [
            'name' => 'Taslimul Hasan',
            'email' => 'info@taslimul.com',
            'password' => bcrypt('@Super#2588'),
            'role' =>'maintainer',
            'member_id'=>'2588', 
       
            
            'created_at' => Carbon::now()-> format('y-m-d h:i:s' ),
            'updated_at' => Carbon::now()-> format('y-m-d h:i:s' )
           
        ];
    
    DB::table('users') -> insert($user);
    
        
    
    }
}
