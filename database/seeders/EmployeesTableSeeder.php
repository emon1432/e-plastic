<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employees')->delete();
        
        \DB::table('employees')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'name' => 'Tarin Ahmed Shara',
                'email' => 'employee@gmail.com',
                'phone' => '01717608607',
                'password' => '$2y$10$Pbuc2qFWryx0SlDPFh43FulvmWCPq1Z0BUmMyWTy3tdWNTlhA.y5q',
                'address' => 'Shongkor, Dhanmondi',
                'gender' => 'Female',
                'created_at' => '2023-03-28 08:00:53',
                'updated_at' => '2023-03-31 18:19:43',
            ),
        ));
        
        
    }
}