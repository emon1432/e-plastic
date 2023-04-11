<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BuyersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('buyers')->delete();
        
        \DB::table('buyers')->insert(array (
            0 => 
            array (
                'id' => 2,
                'user_id' => 7,
                'name' => 'Bishal Choudhuri',
                'email' => 'buyer@gmail.com',
                'phone' => '01756554564',
                'password' => '$2y$10$x6JXA01jU6182CBwrBELd.qTvJdL2N8.fW.ZUcj1ZIuI5McoYHN9u',
                'address' => 'Maymonshing,Dhaka',
                'gender' => 'Male',
                'created_at' => '2023-03-31 18:33:09',
                'updated_at' => '2023-03-31 18:33:09',
            ),
            1 => 
            array (
                'id' => 3,
                'user_id' => 27,
                'name' => 'Kamrun Nahar priyanka',
                'email' => 'priyankakamrunnahar@gmail.com',
                'phone' => '01811118048',
                'password' => '$2y$10$MmS3ZfNzk.d/raC.YDiI5ON8QBngsrs.2Bti8qgcoG3IHHIzXY53C',
                'address' => 'Baridhara',
                'gender' => NULL,
                'created_at' => '2023-04-08 06:33:42',
                'updated_at' => '2023-04-08 06:33:42',
            ),
            2 => 
            array (
                'id' => 4,
                'user_id' => 28,
                'name' => 'farjana Akter Dula',
                'email' => 'farjanaakterdula009@gmail.com',
                'phone' => '01688090842',
                'password' => '$2y$10$LkPe1yANCA1SqWRRs9izYOikJ9Y9gscBPLPDxDAx3ecl0KicKrKKS',
                'address' => 'green Road',
                'gender' => NULL,
                'created_at' => '2023-04-08 06:35:17',
                'updated_at' => '2023-04-08 06:35:17',
            ),
            3 => 
            array (
                'id' => 5,
                'user_id' => 29,
                'name' => 'Khadija tasnim Muntaha',
                'email' => 'khadija.tasnim.muntaha@gmail.com',
                'phone' => '01834842472',
                'password' => '$2y$10$LNMx46k1bN.uf.w6Rovbce1OKTIAzvUvt9/XvWKlpMK2fYjlm.tau',
                'address' => 'Tejgaon',
                'gender' => NULL,
                'created_at' => '2023-04-08 06:37:12',
                'updated_at' => '2023-04-08 06:37:12',
            ),
            4 => 
            array (
                'id' => 6,
                'user_id' => 30,
                'name' => 'Sumiya Toma',
                'email' => 'sumiyatoma08@gmail.com',
                'phone' => '01319375075',
                'password' => '$2y$10$0YP4HIhER4vEiPl3aLpWCOZ/HLQSKvLQ5WcOFqgnYarcHiceL1w4q',
                'address' => 'Mirpur 1',
                'gender' => NULL,
                'created_at' => '2023-04-08 06:39:10',
                'updated_at' => '2023-04-08 06:39:10',
            ),
            5 => 
            array (
                'id' => 7,
                'user_id' => 31,
                'name' => 'Akramul Hoque Nahid',
                'email' => 'akramulhoque105@gmail.com',
                'phone' => '01791672105',
                'password' => '$2y$10$tnCR7CO2/HHipJc7zw.rO.g92E.v3Y22BMkDSsg4F2QeZuMvvXbBK',
                'address' => 'Baily Road',
                'gender' => NULL,
                'created_at' => '2023-04-08 06:41:25',
                'updated_at' => '2023-04-08 06:41:25',
            ),
            6 => 
            array (
                'id' => 8,
                'user_id' => 32,
                'name' => 'Arafat Sorkar',
                'email' => 'arafarsorkar12345@gmail.com',
                'phone' => '01318452438',
                'password' => '$2y$10$nuOGQ9NbTeAFlWdhFAv9ZOtsw/nq9HXmO0aY6fGOuSXKun8Okpj3G',
                'address' => 'Dhanmondi 5',
                'gender' => NULL,
                'created_at' => '2023-04-08 06:43:47',
                'updated_at' => '2023-04-08 06:43:47',
            ),
            7 => 
            array (
                'id' => 9,
                'user_id' => 33,
                'name' => 'Rakibul Islam',
                'email' => 'irakibul347@gmail.com',
                'phone' => '01580815520',
                'password' => '$2y$10$DYqnygIxSzSdtZo0saRDsuVJRqoJ4RV58VCm05hCL3Vh/hxaX0G/O',
                'address' => 'Shukrabad',
                'gender' => NULL,
                'created_at' => '2023-04-08 06:46:40',
                'updated_at' => '2023-04-08 06:46:40',
            ),
            8 => 
            array (
                'id' => 10,
                'user_id' => 34,
                'name' => 'Afrin Sultana',
                'email' => 'afrinsultana.su@gmail.com',
                'phone' => '01722408037',
                'password' => '$2y$10$mpXlKhjIxpiQAZidod2Yr.mM1SxZqWS3ph5KbgugvpGImvWAgJEzS',
                'address' => 'Shyamoli',
                'gender' => NULL,
                'created_at' => '2023-04-08 06:48:42',
                'updated_at' => '2023-04-08 06:48:42',
            ),
            9 => 
            array (
                'id' => 11,
                'user_id' => 35,
                'name' => 'Raian Khan',
                'email' => 'raiankhan1999@gmail.com',
                'phone' => '01777869633',
                'password' => '$2y$10$9EGaJVwbCmCoy7ga/mTEQOpR/87MPSCoA21ETM.M.MegFu08rjsjq',
                'address' => 'Jatrabari',
                'gender' => NULL,
                'created_at' => '2023-04-08 06:50:49',
                'updated_at' => '2023-04-08 06:50:49',
            ),
        ));
        
        
    }
}