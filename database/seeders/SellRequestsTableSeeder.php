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
        
        
        
    }
}