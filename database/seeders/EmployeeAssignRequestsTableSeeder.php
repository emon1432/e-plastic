<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeeAssignRequestsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employee_assign_requests')->delete();
        
        \DB::table('employee_assign_requests')->insert(array (
            0 => 
            array (
                'id' => 1,
                'employee_id' => 10,
                'sell_request_id' => 1,
                'status' => 'posted',
                'created_at' => '2023-04-13 21:30:19',
                'updated_at' => '2023-04-13 21:56:37',
            ),
            1 => 
            array (
                'id' => 2,
                'employee_id' => 1,
                'sell_request_id' => 3,
                'status' => 'accepted',
                'created_at' => '2023-04-13 21:45:28',
                'updated_at' => '2023-04-13 21:54:43',
            ),
            2 => 
            array (
                'id' => 3,
                'employee_id' => 10,
                'sell_request_id' => 2,
                'status' => 'posted',
                'created_at' => '2023-04-14 17:19:05',
                'updated_at' => '2023-04-14 17:20:54',
            ),
        ));
        
        
    }
}