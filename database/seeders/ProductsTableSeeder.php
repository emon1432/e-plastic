<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_name' => 'plastic',
                'product_category_id' => '3',
                'product_weight' => '5',
                'product_price' => '60',
                'buying_price' => '300',
                'selling_price' => '400',
                'image1' => '1681369250.webp',
                'image2' => '1681369250.webp',
                'image3' => '1681369250.webp',
                'status' => 'posted',
                'created_at' => '2023-04-13 07:00:50',
                'updated_at' => '2023-04-13 07:00:50',
            ),
            1 => 
            array (
                'id' => 2,
                'product_name' => 'bottle',
                'product_category_id' => '1',
                'product_weight' => '3',
                'product_price' => '60',
                'buying_price' => '180',
                'selling_price' => '220',
                'image1' => '1681369467.jpg',
                'image2' => '1681369467.jpg',
                'image3' => '1681369467.jpg',
                'status' => 'posted',
                'created_at' => '2023-04-13 07:04:27',
                'updated_at' => '2023-04-13 07:04:27',
            ),
        ));
        
        
    }
}