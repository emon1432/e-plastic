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
        
        
        
    }
}