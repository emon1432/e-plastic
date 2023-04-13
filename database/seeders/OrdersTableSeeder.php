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

        \DB::table('orders')->insert(array(
            0 =>
            array(
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
                'status' => 'Processing',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
