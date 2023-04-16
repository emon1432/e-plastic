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
            3 => 
            array (
                'id' => 4,
                'employee_id' => 10,
                'sell_request_id' => 4,
                'status' => 'posted',
                'created_at' => '2023-04-15 07:41:21',
                'updated_at' => '2023-04-15 07:49:50',
            ),
            4 => 
            array (
                'id' => 5,
                'employee_id' => 3,
                'sell_request_id' => 6,
                'status' => 'posted',
                'created_at' => '2023-04-16 01:37:49',
                'updated_at' => '2023-04-16 01:44:25',
            ),
            5 => 
            array (
                'id' => 6,
                'employee_id' => 3,
                'sell_request_id' => 5,
                'status' => 'posted',
                'created_at' => '2023-04-16 01:37:57',
                'updated_at' => '2023-04-16 01:43:38',
            ),
            6 => 
            array (
                'id' => 7,
                'employee_id' => 3,
                'sell_request_id' => 2,
                'status' => 'posted',
                'created_at' => '2023-04-16 01:38:05',
                'updated_at' => '2023-04-16 01:42:35',
            ),
            7 => 
            array (
                'id' => 8,
                'employee_id' => 4,
                'sell_request_id' => 9,
                'status' => 'posted',
                'created_at' => '2023-04-16 02:02:21',
                'updated_at' => '2023-04-16 02:08:36',
            ),
            8 => 
            array (
                'id' => 9,
                'employee_id' => 4,
                'sell_request_id' => 8,
                'status' => 'posted',
                'created_at' => '2023-04-16 02:02:29',
                'updated_at' => '2023-04-16 02:07:03',
            ),
            9 => 
            array (
                'id' => 10,
                'employee_id' => 4,
                'sell_request_id' => 7,
                'status' => 'posted',
                'created_at' => '2023-04-16 02:02:37',
                'updated_at' => '2023-04-16 02:05:35',
            ),
            10 => 
            array (
                'id' => 11,
                'employee_id' => 5,
                'sell_request_id' => 13,
                'status' => 'picked',
                'created_at' => '2023-04-16 02:16:31',
                'updated_at' => '2023-04-16 02:18:33',
            ),
            11 => 
            array (
                'id' => 12,
                'employee_id' => 5,
                'sell_request_id' => 12,
                'status' => 'picked',
                'created_at' => '2023-04-16 02:16:39',
                'updated_at' => '2023-04-16 02:18:29',
            ),
            12 => 
            array (
                'id' => 13,
                'employee_id' => 5,
                'sell_request_id' => 11,
                'status' => 'picked',
                'created_at' => '2023-04-16 02:16:46',
                'updated_at' => '2023-04-16 02:18:24',
            ),
            13 => 
            array (
                'id' => 14,
                'employee_id' => 5,
                'sell_request_id' => 17,
                'status' => 'posted',
                'created_at' => '2023-04-16 02:26:17',
                'updated_at' => '2023-04-16 02:32:10',
            ),
            14 => 
            array (
                'id' => 15,
                'employee_id' => 5,
                'sell_request_id' => 16,
                'status' => 'posted',
                'created_at' => '2023-04-16 02:26:25',
                'updated_at' => '2023-04-16 02:30:49',
            ),
            15 => 
            array (
                'id' => 16,
                'employee_id' => 5,
                'sell_request_id' => 15,
                'status' => 'posted',
                'created_at' => '2023-04-16 02:26:36',
                'updated_at' => '2023-04-16 02:29:40',
            ),
            16 => 
            array (
                'id' => 17,
                'employee_id' => 6,
                'sell_request_id' => 22,
                'status' => 'posted',
                'created_at' => '2023-04-16 02:37:12',
                'updated_at' => '2023-04-16 02:46:00',
            ),
            17 => 
            array (
                'id' => 18,
                'employee_id' => 6,
                'sell_request_id' => 21,
                'status' => 'posted',
                'created_at' => '2023-04-16 02:37:23',
                'updated_at' => '2023-04-16 02:45:05',
            ),
            18 => 
            array (
                'id' => 19,
                'employee_id' => 6,
                'sell_request_id' => 20,
                'status' => 'posted',
                'created_at' => '2023-04-16 02:37:32',
                'updated_at' => '2023-04-16 02:43:36',
            ),
            19 => 
            array (
                'id' => 20,
                'employee_id' => 6,
                'sell_request_id' => 19,
                'status' => 'posted',
                'created_at' => '2023-04-16 02:37:40',
                'updated_at' => '2023-04-16 02:42:47',
            ),
            20 => 
            array (
                'id' => 21,
                'employee_id' => 6,
                'sell_request_id' => 18,
                'status' => 'posted',
                'created_at' => '2023-04-16 02:37:47',
                'updated_at' => '2023-04-16 02:41:23',
            ),
            21 => 
            array (
                'id' => 22,
                'employee_id' => 7,
                'sell_request_id' => 27,
                'status' => 'posted',
                'created_at' => '2023-04-16 02:52:35',
                'updated_at' => '2023-04-16 03:00:52',
            ),
            22 => 
            array (
                'id' => 23,
                'employee_id' => 7,
                'sell_request_id' => 26,
                'status' => 'posted',
                'created_at' => '2023-04-16 02:52:47',
                'updated_at' => '2023-04-16 03:00:02',
            ),
            23 => 
            array (
                'id' => 24,
                'employee_id' => 7,
                'sell_request_id' => 25,
                'status' => 'posted',
                'created_at' => '2023-04-16 02:52:55',
                'updated_at' => '2023-04-16 02:59:09',
            ),
            24 => 
            array (
                'id' => 25,
                'employee_id' => 7,
                'sell_request_id' => 24,
                'status' => 'posted',
                'created_at' => '2023-04-16 02:53:04',
                'updated_at' => '2023-04-16 02:58:08',
            ),
            25 => 
            array (
                'id' => 26,
                'employee_id' => 7,
                'sell_request_id' => 23,
                'status' => 'posted',
                'created_at' => '2023-04-16 02:53:12',
                'updated_at' => '2023-04-16 02:56:28',
            ),
            26 => 
            array (
                'id' => 27,
                'employee_id' => 8,
                'sell_request_id' => 33,
                'status' => 'picked',
                'created_at' => '2023-04-16 03:32:14',
                'updated_at' => '2023-04-16 03:34:42',
            ),
            27 => 
            array (
                'id' => 28,
                'employee_id' => 8,
                'sell_request_id' => 32,
                'status' => 'posted',
                'created_at' => '2023-04-16 03:32:23',
                'updated_at' => '2023-04-16 03:39:51',
            ),
            28 => 
            array (
                'id' => 29,
                'employee_id' => 8,
                'sell_request_id' => 31,
                'status' => 'posted',
                'created_at' => '2023-04-16 03:32:31',
                'updated_at' => '2023-04-16 03:39:02',
            ),
            29 => 
            array (
                'id' => 30,
                'employee_id' => 8,
                'sell_request_id' => 30,
                'status' => 'posted',
                'created_at' => '2023-04-16 03:32:39',
                'updated_at' => '2023-04-16 03:38:23',
            ),
            30 => 
            array (
                'id' => 31,
                'employee_id' => 8,
                'sell_request_id' => 29,
                'status' => 'posted',
                'created_at' => '2023-04-16 03:32:47',
                'updated_at' => '2023-04-16 03:36:49',
            ),
            31 => 
            array (
                'id' => 32,
                'employee_id' => 8,
                'sell_request_id' => 28,
                'status' => 'posted',
                'created_at' => '2023-04-16 03:32:57',
                'updated_at' => '2023-04-16 03:36:08',
            ),
            32 => 
            array (
                'id' => 33,
                'employee_id' => 9,
                'sell_request_id' => 39,
                'status' => 'posted',
                'created_at' => '2023-04-16 05:20:46',
                'updated_at' => '2023-04-16 05:28:38',
            ),
            33 => 
            array (
                'id' => 34,
                'employee_id' => 9,
                'sell_request_id' => 38,
                'status' => 'picked',
                'created_at' => '2023-04-16 05:20:55',
                'updated_at' => '2023-04-16 05:23:09',
            ),
            34 => 
            array (
                'id' => 35,
                'employee_id' => 9,
                'sell_request_id' => 37,
                'status' => 'posted',
                'created_at' => '2023-04-16 05:21:03',
                'updated_at' => '2023-04-16 05:27:23',
            ),
            35 => 
            array (
                'id' => 36,
                'employee_id' => 9,
                'sell_request_id' => 36,
                'status' => 'posted',
                'created_at' => '2023-04-16 05:21:13',
                'updated_at' => '2023-04-16 05:26:19',
            ),
            36 => 
            array (
                'id' => 37,
                'employee_id' => 9,
                'sell_request_id' => 35,
                'status' => 'posted',
                'created_at' => '2023-04-16 05:21:22',
                'updated_at' => '2023-04-16 05:25:17',
            ),
            37 => 
            array (
                'id' => 38,
                'employee_id' => 9,
                'sell_request_id' => 34,
                'status' => 'posted',
                'created_at' => '2023-04-16 05:21:31',
                'updated_at' => '2023-04-16 05:24:29',
            ),
        ));
        
        
    }
}