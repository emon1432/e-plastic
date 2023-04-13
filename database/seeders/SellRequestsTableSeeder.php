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
                'address' => 'Banani Dhaka',
                'product_name' => 'bottle',
                'product_category_id' => '1',
                'product_weight' => '3',
                'product_price' => '60',
                'total_price' => '180',
                'image' => '1680930573.jpeg',
                'status' => 'pending',
                'reject_reason' => NULL,
                'created_at' => '2023-04-08 05:09:33',
                'updated_at' => '2023-04-13 04:29:57',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Aishorjo Biswas',
                'phone' => '01516760531',
                'email' => 'seler@gmail.com',
                'address' => 'Motijheel Dhaka',
                'product_name' => 'plastic',
                'product_category_id' => '3',
                'product_weight' => '5',
                'product_price' => '60',
                'total_price' => '300',
                'image' => '1680930647.jpeg',
                'status' => 'pending',
                'reject_reason' => NULL,
                'created_at' => '2023-04-08 05:10:47',
                'updated_at' => '2023-04-13 04:29:10',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Aishorjo Biswas',
                'phone' => '01516760531',
                'email' => 'seler@gmail.com',
                'address' => 'Banani',
                'product_name' => 'bottle',
                'product_category_id' => '1',
                'product_weight' => '2',
                'product_price' => '60',
                'total_price' => '120',
                'image' => '1680938877.jpeg',
                'status' => 'rejected',
                'reject_reason' => 'picture not clear',
                'created_at' => '2023-04-08 07:27:57',
                'updated_at' => '2023-04-08 07:28:57',
            ),
        ));
        
        
    }
}