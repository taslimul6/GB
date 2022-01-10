<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Carbon;

class TransactionSeeder extends Seeder
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
           
            
            'student_id' => $faker-> randomDigit(5),
            'session_id' => $faker-> randomDigit(5),
            'semester_id' => $faker-> randomDigit(5),
            'details' => $faker-> realText(15),
            'amount' => $faker-> randomDigit(5),
            'payslip' => $faker-> randomDigit(5),
           
            
            
            
            'created_at' => Carbon::now()-> format('y-m-d h:i:s' ),
            'updated_at' => Carbon::now()-> format('y-m-d h:i:s' )
           
        ];
    
    DB::table('transactions') -> insert($user);
    
        endfor;
    }
}
