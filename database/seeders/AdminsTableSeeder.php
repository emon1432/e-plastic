<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        DB::table('admins')->insert(array(
            0 =>
            array(
                'id' => 1,
                'user_id' => 1,
                'name' => 'Emon Admin',
                'email' => 'admin@gmail.com',
                'phone' => '01638849305',
                'password' => '$2y$10$4UQiBwuUQH6pYpmLVKgXoOofXRnVzalgBnpuZNxV3zswScN07cm/6',
                'address' => 'Aftabnagar, Dhaka',
                'gender' => 'Male',
                'created_at' => '2023-03-28 07:49:21',
                'updated_at' => '2023-03-28 07:49:21',
            ),
        ));
    }
}
