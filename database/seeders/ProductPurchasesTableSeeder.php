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
                'user_id' => '37',
                'product_name' => 'Fresh Bottles',
                'product_description' => 'This product is very good. Collected from houses.This product is very good. Collected from houses.This product is very good. Collected from houses.This product is very good. Collected from houses.',
                'product_category_id' => '1',
                'product_price' => '60',
                'product_weight' => '10',
                'buying_price' => '600',
                'image' => NULL,
                'status' => 'bought',
                'created_at' => '2023-04-13 21:57:35',
                'updated_at' => '2023-04-13 21:57:35',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => '37',
                'product_name' => 'Plastics',
                'product_description' => 'This is a product Description',
                'product_category_id' => '3',
                'product_price' => '60',
                'product_weight' => '5',
                'buying_price' => '300',
                'image' => NULL,
                'status' => 'bought',
                'created_at' => '2023-04-14 17:20:54',
                'updated_at' => '2023-04-14 17:20:54',
            ),
        ));
        
        
    }
}