<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductPurchasesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_purchases')->delete();
        
        \DB::table('product_purchases')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_name' => 'plastic',
                'product_category_id' => '3',
                'product_price' => '60',
                'product_weight' => '5',
                'buying_price' => '300',
                'image' => NULL,
                'status' => 'bought',
                'created_at' => '2023-04-13 07:00:50',
                'updated_at' => '2023-04-13 07:00:50',
            ),
            1 => 
            array (
                'id' => 2,
                'product_name' => 'bottle',
                'product_category_id' => '1',
                'product_price' => '60',
                'product_weight' => '3',
                'buying_price' => '180',
                'image' => NULL,
                'status' => 'bought',
                'created_at' => '2023-04-13 07:04:27',
                'updated_at' => '2023-04-13 07:04:27',
            ),
        ));
        
        
    }
}