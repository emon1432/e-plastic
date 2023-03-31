<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sellers')->delete();
        
        \DB::table('sellers')->insert(array (
            0 => 
            array (
                'id' => 2,
                'user_id' => 6,
                'name' => 'Aishorjo Biswas',
                'email' => 'seler@gmail.com',
                'phone' => '01516760531',
                'password' => '$2y$10$Nqd48KF68Mq.kjJ2xC66Je5OeRJ0AC2ie39nAVhWvD20kNiU7t3SK',
                'address' => 'Shongkor,Dhanmondi',
                'gender' => 'Female',
                'created_at' => '2023-03-31 18:21:09',
                'updated_at' => '2023-03-31 18:21:09',
            ),
        ));
        
        
    }
}