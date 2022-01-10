<?php

namespace Database\Seeders;


use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
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
           
            'full_name' => $faker-> name(),
            'present_address' => $faker ->address(),
            'permanent_address' => $faker ->address(),
            'phone' => $faker ->phoneNumber(),
            'gender' => "Male",
            'blood' => "A+",
            'nationality' => "bangladeshi",
            'religion' => "Muslim",
            'fathers_name' => $faker ->name(),

            'fathers_contact' => $faker ->phoneNumber(10),
            'mothers_name' => $faker ->name(),
            'emergency_c_name' => $faker ->name(),
            'emergency_number' => $faker ->phoneNumber(10),

            'student_id' => $faker ->randomDigit(5),
            'class_roll' => $faker ->randomDigit(3),
            'exam_roll' => $faker ->randomDigit(),
            'department_id' => $faker ->randomDigit(),
            
            'batch' => $faker ->randomDigit(),
            'dob' => $faker ->date(),
            
            


           
            
            
            'created_at' => Carbon::now()-> format('y-m-d h:i:s' ),
            'updated_at' => Carbon::now()-> format('y-m-d h:i:s' )
           
        ];
    
    DB::table('students') -> insert($user);
    
        endfor;
    }
}
