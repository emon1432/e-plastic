<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellRequestsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sell_requests')->delete();
        
        \DB::table('sell_requests')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Aishorjo Biswas',
                'phone' => '01516760531',
                'email' => 'seler@gmail.com',
                'address' => 'Dhanmondi',
                'product_category_id' => '1',
                'product_weight' => '2',
                'product_price' => '50',
                'total_price' => '100',
                'image' => '1680731762.jpg',
                'status' => 'pending',
                'created_at' => '2023-04-05 21:56:02',
                'updated_at' => '2023-04-05 21:56:02',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Aishorjo Biswas',
                'phone' => '01516760531',
                'email' => 'seler@gmail.com',
                'address' => 'Dhanmondi Dhaka',
                'product_category_id' => '1',
                'product_weight' => '5',
                'product_price' => '50',
                'total_price' => '250',
                'image' => '1680813868.jpg',
                'status' => 'pending',
                'created_at' => '2023-04-06 20:00:18',
                'updated_at' => '2023-04-06 20:44:28',
            ),
        ));
        
        
    }
}