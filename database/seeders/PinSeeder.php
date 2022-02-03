<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Carbon;

class PinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $user = [
        'pin' => $faker ->randomNumber($nbDigits = '6', $strict = false) ,
        ];



        DB::table('pins') -> insert($user);
    }
}
