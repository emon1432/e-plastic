<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sellers')->delete();
        
        \DB::table('sellers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 18,
                'name' => 'Md. Mynul Islam',
                'email' => 'mynul7355@gmail.com',
                'phone' => '01763819558',
                'password' => '$2y$10$H5NEF3kiaNVHY1nphJoZSeHSSX30h58iS7HCr10uYcuhhVoCX5chy',
                'address' => 'Hatirjheel',
                'gender' => 'Male',
                'created_at' => '2023-04-08 06:00:26',
                'updated_at' => '2023-04-08 06:01:20',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 19,
                'name' => 'Kaushik Biswas',
                'email' => 'kaushik.biswas.edu@gmail.com',
                'phone' => '01878270829',
                'password' => '$2y$10$mXP5O8dIecI8Sp0x0YsSAeXIPpcSAr1fB943LRThsgzE/AgCQ9Qe6',
                'address' => 'Badda',
                'gender' => 'Male',
                'created_at' => '2023-04-08 06:06:57',
                'updated_at' => '2023-04-08 06:07:43',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 20,
                'name' => 'Mst. Tasmiya Islam Anika',
                'email' => 'sardaranika22@gmail.com',
                'phone' => '01602248397',
                'password' => '$2y$10$gsEEO2HnCOeUfhoNgGdgDusDjywwnNwxsBsQ.dJfuhpq2RYf1xX5W',
                'address' => '12345678',
                'gender' => NULL,
                'created_at' => '2023-04-08 06:10:46',
                'updated_at' => '2023-04-08 06:10:46',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 21,
                'name' => 'Hasan Mahmud Tahsin',
                'email' => 'hasanmahmudtahsinsub@gmail.com',
                'phone' => '01610027909',
                'password' => '$2y$10$7JnloM2EUAiUAW7hUpVTluHiSAujJEQKKXxVa/hOpvzoOGeuW/y4q',
                'address' => 'purandhaka',
                'gender' => NULL,
                'created_at' => '2023-04-08 06:15:45',
                'updated_at' => '2023-04-08 06:15:45',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 22,
                'name' => 'Farzana Azad',
                'email' => 'farzanaazadp@gmail.com',
                'phone' => '01792038579',
                'password' => '$2y$10$7Y0gk3jHULHJU9r0J4KD5OX2zITrglH/oyAjMN5aTNYeLN0BuJqq.',
                'address' => 'Azimpur',
                'gender' => NULL,
                'created_at' => '2023-04-08 06:22:01',
                'updated_at' => '2023-04-08 06:22:01',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 23,
                'name' => 'Ridwana Majumder',
                'email' => 'ridr471@gmail.com',
                'phone' => '01679010324',
                'password' => '$2y$10$l1qcp7H/wKhelh96zzqkA.uBXOj5CQa6G3fcfw1QocwMq8xroPpf2',
                'address' => 'Tikatoli',
                'gender' => NULL,
                'created_at' => '2023-04-08 06:23:52',
                'updated_at' => '2023-04-08 06:23:52',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 24,
                'name' => 'Ashikur Rahman',
                'email' => 'ashikurrahman18@gmail.com',
                'phone' => '01759770702',
                'password' => '$2y$10$LbA8zC5gcNlUkc0iEWrS0.HmSb8d3VtWZ/jZlYZE0BXl7QrMMUkfS',
                'address' => 'Newmarket',
                'gender' => NULL,
                'created_at' => '2023-04-08 06:26:34',
                'updated_at' => '2023-04-08 06:26:34',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 25,
                'name' => 'Shon pollock Hawlader',
                'email' => 'shonpollock0@gmail.com',
                'phone' => '01911192302',
                'password' => '$2y$10$Gd/1GTDesQWdDYOICz1hDuWop1dtQyHj/GHuYV3X.O6U8Dme9.5X.',
                'address' => 'Dhanmondi 32',
                'gender' => NULL,
                'created_at' => '2023-04-08 06:29:28',
                'updated_at' => '2023-04-08 06:29:28',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 26,
                'name' => 'Sakib Mahmud',
                'email' => 'sakib.mahmud.1129@gmail.com',
                'phone' => '01401626878',
                'password' => '$2y$10$FnWWtw5eXixBiSM.iLoiJOKmtzz5HhD3I6FhMGYtSYx72YPvVOtQ.',
                'address' => 'Uttara',
                'gender' => NULL,
                'created_at' => '2023-04-08 06:30:50',
                'updated_at' => '2023-04-08 06:30:50',
            ),
        ));
        
        
    }
}