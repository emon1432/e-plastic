<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('employees')->delete();
        DB::table('employees')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Emon Employee',
                'email' => 'employee@gmail.com',
                'phone' => '01638849305',
                'password' => '$2y$10$Pbuc2qFWryx0SlDPFh43FulvmWCPq1Z0BUmMyWTy3tdWNTlhA.y5q',
                'address' => 'Aftabnagar, Dhaka',
                'image' => NULL,
                'created_at' => '2023-03-28 08:00:53',
                'updated_at' => '2023-03-28 08:00:53',
            ),
        ));
    }
}
