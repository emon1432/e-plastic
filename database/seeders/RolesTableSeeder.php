<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();
        DB::table('roles')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Admin',
                'slug' => 'admin',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Employee',
                'slug' => 'employee',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Seller',
                'slug' => 'seller',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Buyer',
                'slug' => 'buyer',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
