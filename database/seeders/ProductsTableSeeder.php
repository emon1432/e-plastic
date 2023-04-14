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
                'id' => 2,
                'product_name' => 'Fresh Bottles',
                'product_description' => 'This product is very good. Collected from houses.This product is very good. Collected from houses.This product is very good. Collected from houses.This product is very good. Collected from houses.',
                'product_category_id' => '1',
                'product_weight' => '10',
                'product_price' => '60',
                'buying_price' => '600',
                'selling_price' => '790',
                'image1' => '1681423055.jpg',
                'image2' => '1681423055.jpg',
                'image3' => '1681423055.jpg',
                'status' => 'posted',
                'sale_status' => 'sold',
                'created_at' => '2023-04-13 21:57:35',
                'updated_at' => '2023-04-13 21:57:35',
            ),
            1 => 
            array (
                'id' => 3,
                'product_name' => 'Plastics',
                'product_description' => 'This is a product Description',
                'product_category_id' => '3',
                'product_weight' => '5',
                'product_price' => '60',
                'buying_price' => '300',
                'selling_price' => '400',
                'image1' => '1681492854.webp',
                'image2' => '1681492854.webp',
                'image3' => '1681492854.webp',
                'status' => 'posted',
                'sale_status' => 'available',
                'created_at' => '2023-04-14 17:20:54',
                'updated_at' => '2023-04-14 17:20:54',
            ),
        ));
        
        
    }
}