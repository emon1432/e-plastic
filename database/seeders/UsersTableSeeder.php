<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
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
            array (
                'id' => 9,
                'role_id' => 2,
                'name' => 'Tarin Ahmed Shara',
                'email' => 'shara@gmail.com',
                'phone' => '01516760531',
                'email_verified_at' => NULL,
                'password' => '$2y$10$mGgLUljrmAt7X5xTEAw1cuMaD9KwhA4wyYjryyAHxKpBFAdVl2IVG',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'address' => 'Shongkor,Dhanmondi',
                'image' => '1681225689-desktop-wallpaper-itachi-uchiha-naruto-art-resolution-anime-and-background-itachi-1366x768.jpg',
                'gender' => 'Female',
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'created_at' => '2023-04-11 15:08:09',
                'updated_at' => '2023-04-11 15:08:09',
            ),
            2 => 
            array (
                'id' => 10,
                'role_id' => 3,
                'name' => 'Aishorjo Biswas',
                'email' => 'aishorjo@gmail.com',
                'phone' => '017259876585',
                'email_verified_at' => NULL,
                'password' => '$2y$10$mV5hAf2ZAHmdGBI1agQ7yegjfYRfNEneevt1ro4Ot3ElWoof7vq0i',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'address' => 'Shongkor,Dhanmondi',
                'image' => '1681225867-desktop-wallpaper-itachi-uchiha-naruto-art-resolution-anime-and-background-itachi-1366x768.jpg',
                'gender' => 'Female',
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'created_at' => '2023-04-11 15:11:07',
                'updated_at' => '2023-04-11 15:11:07',
            ),
            3 => 
            array (
                'id' => 11,
                'role_id' => 4,
                'name' => 'Saju Ahmed',
                'email' => 'saju@gmail.com',
                'phone' => '01725354028',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Q6iOpTNrXNGT69j4Jg1bZexZoidp3qSX1h5x/sCoAx5hkjXAq48XS',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'address' => 'Mirpur,dhaka',
                'image' => '1681226038-1675161140_new-project-2023-01-31t160104-090.jpg',
                'gender' => 'Male',
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'created_at' => '2023-04-11 15:13:58',
                'updated_at' => '2023-04-11 15:13:58',
            ),
        ));
        
        
    }
}