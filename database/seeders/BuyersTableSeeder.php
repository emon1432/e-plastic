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
                'id' => 2,
                'user_id' => 7,
                'name' => 'Bishal Choudhuri',
                'email' => 'buyer@gmail.com',
                'phone' => '01756554564',
                'password' => '$2y$10$x6JXA01jU6182CBwrBELd.qTvJdL2N8.fW.ZUcj1ZIuI5McoYHN9u',
                'address' => 'Maymonshing,Dhaka',
                'gender' => 'Male',
                'created_at' => '2023-03-31 18:33:09',
                'updated_at' => '2023-03-31 18:33:09',
            ),
        ));
    }
}
