<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'role_id' => 1,
                'name' => 'Emon Admin',
                'email' => 'admin@gmail.com',
                'phone' => '01638849305',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4UQiBwuUQH6pYpmLVKgXoOofXRnVzalgBnpuZNxV3zswScN07cm/6',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'address' => 'Aftabnagar, Dhaka',
                'image' => NULL,
                'gender' => 'Male',
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'created_at' => '2023-03-28 07:49:21',
                'updated_at' => '2023-03-28 07:49:21',
            ),
            1 =>
            array(
                'id' => 2,
                'role_id' => 2,
                'name' => 'Emon Employee',
                'email' => 'employee@gmail.com',
                'phone' => '01638849305',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Pbuc2qFWryx0SlDPFh43FulvmWCPq1Z0BUmMyWTy3tdWNTlhA.y5q',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'address' => 'Aftabnagar, Dhaka',
                'image' => NULL,
                'gender' => 'Male',
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'created_at' => '2023-03-28 08:00:53',
                'updated_at' => '2023-03-28 08:00:53',
            ),
            2 =>
            array(
                'id' => 3,
                'role_id' => 3,
                'name' => 'Emon Customer',
                'email' => 'customer@gmail.com',
                'phone' => '01638849305',
                'email_verified_at' => NULL,
                'password' => '$2y$10$MzdjC9gL7NOIPgLaSVC7Ue5Uq9tu381Dde9MDwWvrpH0euN8qRw8i',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'address' => 'Aftabnagar, Dhaka',
                'image' => NULL,
                'gender' => 'Male',
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'created_at' => '2023-03-28 08:20:06',
                'updated_at' => '2023-03-28 08:20:06',
            ),
            3 =>
            array(
                'id' => 4,
                'role_id' => 4,
                'name' => 'Emon buyer',
                'email' => 'buyer@gmail.com',
                'phone' => '01638849305',
                'email_verified_at' => NULL,
                'password' => '$2y$10$M5JKH79eU51hIPlqbeqZBeJGdzDPYpIkuwjS67cF./qStEGMHASJO',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'address' => 'Aftabnagar, Dhaka',
                'image' => NULL,
                'gender' => 'Male',
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'created_at' => '2023-03-28 08:21:21',
                'updated_at' => '2023-03-28 08:21:21',
            ),
        ));
    }
}
