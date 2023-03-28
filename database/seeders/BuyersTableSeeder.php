<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuyersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('buyers')->delete();
        DB::table('buyers')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Emon buyer',
                'email' => 'buyer@gmail.com',
                'phone' => '01638849305',
                'password' => '$2y$10$4iUunWc8tVsgR0LKON7STOVntMSPYJHupxp9MJ0D4znm2/chVY7kK',
                'address' => 'Aftabnagar, Dhaka',
                'image' => NULL,
                'gender' => 'Male',
                'created_at' => '2023-03-28 08:21:21',
                'updated_at' => '2023-03-28 08:21:21',
            ),
        ));
    }
}
