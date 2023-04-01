<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'role_id' => 1,
                'name' => 'Tanny',
                'email' => 'admin@gmail.com',
                'phone' => '01776203622',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4UQiBwuUQH6pYpmLVKgXoOofXRnVzalgBnpuZNxV3zswScN07cm/6',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'address' => 'Shongkor,Dhanmondi',
                'image' => '1680286719-c-3.png',
                'gender' => 'Female',
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'created_at' => '2023-03-28 07:49:21',
                'updated_at' => '2023-03-31 18:18:39',
            ),
            1 =>
            array(
                'id' => 2,
                'role_id' => 2,
                'name' => 'Tarin Ahmed Shara',
                'email' => 'employee@gmail.com',
                'phone' => '01717608607',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Pbuc2qFWryx0SlDPFh43FulvmWCPq1Z0BUmMyWTy3tdWNTlhA.y5q',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'address' => 'Shongkor, Dhanmondi',
                'image' => '1680286783-instructor.jpg',
                'gender' => 'Female',
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'created_at' => '2023-03-28 08:00:53',
                'updated_at' => '2023-03-31 18:19:43',
            ),
            2 =>
            array(
                'id' => 6,
                'role_id' => 3,
                'name' => 'Aishorjo Biswas',
                'email' => 'seler@gmail.com',
                'phone' => '01516760531',
                'email_verified_at' => NULL,
                'password' => '$2y$10$P6fvT0m2IPPXRBnshlzM0ep8aWLuZ.p3FjNdGPDShtcAEOriT8cKW',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'address' => 'Shongkor,Dhanmondi',
                'image' => '1680286869-course-author.jpg',
                'gender' => 'Female',
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'created_at' => '2023-03-31 18:21:09',
                'updated_at' => '2023-03-31 18:21:09',
            ),
            3 =>
            array(
                'id' => 7,
                'role_id' => 4,
                'name' => 'Bishal Choudhuri',
                'email' => 'buyer@gmail.com',
                'phone' => '01756554564',
                'email_verified_at' => NULL,
                'password' => '$2y$10$i0F4h2phQTS3wJPR6izxWOPzd0bAv0.ve.145ey8hyNUTEDUSplL6',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'address' => 'Maymonshing,Dhaka',
                'image' => '1680287589-144946442-frontal-portrait-of-a-serious-looking-businessman.jpg',
                'gender' => 'Male',
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'created_at' => '2023-03-31 18:33:09',
                'updated_at' => '2023-03-31 18:33:09',
            ),
        ));
    }
}
