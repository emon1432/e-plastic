<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'order_id' => NULL,
                'transaction_id' => '6438779e639b0',
                'currency' => 'BDT',
                'user_id' => '7',
                'name' => 'Bishal Choudhuri',
                'phone' => '01756554564',
                'email' => 'buyer@gmail.com',
                'address' => 'Maymonshing,Dhaka',
                'product_id' => '2',
                'product_category_id' => '1',
                'product_weight' => '3',
                'product_price' => NULL,
                'total_price' => NULL,
                'amount' => 220.0,
                'image' => NULL,
                'status' => 'delivered',
                'assign_employee_id' => '36',
                'created_at' => '2023-09-14 17:22:02',
                'updated_at' => '2023-04-14 16:37:44',
            ),
            1 => 
            array (
                'id' => 6,
                'order_id' => NULL,
                'transaction_id' => '64398ba1b0331',
                'currency' => 'BDT',
                'user_id' => '36',
                'name' => 'Tarin Ahmed Shara',
                'phone' => '01725354021',
                'email' => 'employee@gmail.com',
                'address' => 'Shongkor,Dhanmondi',
                'product_id' => '3',
                'product_category_id' => '3',
                'product_weight' => '5',
                'product_price' => NULL,
                'total_price' => NULL,
                'amount' => 400.0,
                'image' => NULL,
                'status' => 'delivered',
                'assign_employee_id' => NULL,
                'created_at' => '2022-04-14 17:22:02',
                'updated_at' => '2023-04-14 17:22:02',
            ),
            2 => 
            array (
                'id' => 8,
                'order_id' => NULL,
                'transaction_id' => '64398cfa1634e',
                'currency' => 'BDT',
                'user_id' => '7',
                'name' => 'Bishal Choudhuri',
                'phone' => '01756554564',
                'email' => 'buyer@gmail.com',
                'address' => 'Maymonshing,Dhaka',
                'product_id' => '2',
                'product_category_id' => '1',
                'product_weight' => '10',
                'product_price' => NULL,
                'total_price' => NULL,
                'amount' => 790.0,
                'image' => NULL,
                'status' => 'delivered',
                'assign_employee_id' => '36',
                'created_at' => '2023-05-19 17:22:02',
                'updated_at' => '2023-04-14 17:31:57',
            ),
            3 => 
            array (
                'id' => 9,
                'order_id' => NULL,
                'transaction_id' => '64398cfaa0287',
                'currency' => 'BDT',
                'user_id' => '7',
                'name' => 'Bishal Choudhuri',
                'phone' => '01756554564',
                'email' => 'buyer@gmail.com',
                'address' => 'Maymonshing,Dhaka',
                'product_id' => '2',
                'product_category_id' => '1',
                'product_weight' => '10',
                'product_price' => NULL,
                'total_price' => NULL,
                'amount' => 790.0,
                'image' => NULL,
                'status' => 'pending',
                'assign_employee_id' => NULL,
                'created_at' => '2022-08-14 17:22:02',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 10,
                'order_id' => NULL,
                'transaction_id' => '643a58b9b0b97',
                'currency' => 'BDT',
                'user_id' => '7',
                'name' => 'Bishal Choudhuri',
                'phone' => '01756554564',
                'email' => 'buyer@gmail.com',
                'address' => 'Maymonshing,Dhaka',
                'product_id' => '4',
                'product_category_id' => '1',
                'product_weight' => '3',
                'product_price' => NULL,
                'total_price' => NULL,
                'amount' => 200.0,
                'image' => NULL,
                'status' => 'delivered',
                'assign_employee_id' => '36',
                'created_at' => '2023-04-15 07:57:07',
                'updated_at' => '2023-04-15 08:00:14',
            ),
            5 => 
            array (
                'id' => 12,
                'order_id' => NULL,
                'transaction_id' => '643b88f984e5e',
                'currency' => 'BDT',
                'user_id' => '19',
                'name' => 'Kaushik Biswas',
                'phone' => '01878270829',
                'email' => 'kaushik.biswas.edu@gmail.com',
                'address' => 'Badda',
                'product_id' => '33',
                'product_category_id' => '1',
                'product_weight' => '7',
                'product_price' => NULL,
                'total_price' => NULL,
                'amount' => 500.0,
                'image' => NULL,
                'status' => 'pending',
                'assign_employee_id' => NULL,
                'created_at' => '2023-04-16 05:35:32',
                'updated_at' => '2023-04-16 05:35:32',
            ),
        ));
        
        
    }
}