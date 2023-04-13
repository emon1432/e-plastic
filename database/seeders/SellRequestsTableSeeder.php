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
                'seller_id' => '37',
                'address' => 'Dhanmondi,Shongkor,127/2',
                'product_name' => 'Fresh Bottles',
                'product_category_id' => '1',
                'product_weight' => '10',
                'product_price' => '60',
                'total_price' => '600',
                'image' => '1681420494.jpg',
                'status' => 'completed',
                'reject_reason' => NULL,
                'created_at' => '2023-04-13 21:14:54',
                'updated_at' => '2023-04-13 21:48:10',
            ),
            1 => 
            array (
                'id' => 2,
                'seller_id' => '37',
                'address' => 'Mohammadpud,katashur,2/326',
                'product_name' => 'Plastics',
                'product_category_id' => '3',
                'product_weight' => '5',
                'product_price' => '60',
                'total_price' => '300',
                'image' => '1681422214.webp',
                'status' => 'pending',
                'reject_reason' => NULL,
                'created_at' => '2023-04-13 21:43:34',
                'updated_at' => '2023-04-13 21:43:34',
            ),
            2 => 
            array (
                'id' => 3,
                'seller_id' => '37',
                'address' => 'Dhanmondi,Shukrabad,4/150',
                'product_name' => 'Plates',
                'product_category_id' => '2',
                'product_weight' => '7',
                'product_price' => '80',
                'total_price' => '560',
                'image' => '1681422277.jpg',
                'status' => 'assigned',
                'reject_reason' => NULL,
                'created_at' => '2023-04-13 21:44:37',
                'updated_at' => '2023-04-13 21:45:28',
            ),
        ));
        
        
    }
}