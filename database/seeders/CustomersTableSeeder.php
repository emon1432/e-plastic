<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->delete();
        DB::table('customers')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Emon Customer',
                'email' => 'customer@gmail.com',
                'phone' => '01638849305',
                'password' => '$2y$10$cio2mRG3mUkRkJbmpmn3wONQ85.SsxIi.zrhF.MfhSBsaraZ1QsRO',
                'address' => 'Aftabnagar, Dhaka',
                'image' => NULL,
                'created_at' => '2023-03-28 08:20:06',
                'updated_at' => '2023-03-28 08:20:06',
            ),
        ));
    }
}
