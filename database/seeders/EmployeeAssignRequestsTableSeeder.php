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
                'employee_id' => 1,
                'sell_request_id' => 1,
                'status' => 'posted',
                'created_at' => '2023-04-13 06:59:02',
                'updated_at' => '2023-04-13 07:04:27',
            ),
            1 => 
            array (
                'id' => 2,
                'employee_id' => 1,
                'sell_request_id' => 2,
                'status' => 'posted',
                'created_at' => '2023-04-13 06:59:20',
                'updated_at' => '2023-04-13 06:59:37',
            ),
        ));
        
        
    }
}