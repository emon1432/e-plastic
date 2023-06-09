<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(BuyersTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(SellersTableSeeder::class);
        $this->call(SellRequestsTableSeeder::class);
        $this->call(ProductCategoriesTableSeeder::class);
        $this->call(EmployeeAssignRequestsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductPurchasesTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
    }
}
