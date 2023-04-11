<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employees')->delete();
        
        \DB::table('employees')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 9,
                'name' => 'Shahin Sikder',
                'email' => 'sikdershahin72@gmail.com',
                'phone' => '01721215790',
                'password' => '$2y$10$lNjM3JyRrErlvf3o8.kqn..7GWam2it75uiXKgU9mnV4LKdDSSJca',
                'address' => 'Gulshan',
                'gender' => 'Male',
                'created_at' => '2023-04-08 05:20:07',
                'updated_at' => '2023-04-08 05:20:07',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 10,
                'name' => 'Samia Rahman',
                'email' => 'rahmansamia837@gmail.com',
                'phone' => '01310275656',
                'password' => '$2y$10$xRg6/T220oSDi.H0PyZ6C.ABThYdPc96lPl2CmkVBUMm4fx9vvfjm',
                'address' => 'Lalmatia',
                'gender' => 'Male',
                'created_at' => '2023-04-08 05:30:23',
                'updated_at' => '2023-04-08 05:30:23',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 11,
                'name' => 'Rakibul Hasan Rakib',
                'email' => 'rakib.sub.ug02@gmail.com',
                'phone' => '01760828440',
                'password' => '$2y$10$ddj4YX7HR5wfqvghhIoJS.z5LwUdo.YjC6r7z3kp9zDOvtHuMZMM2',
                'address' => 'Shahbag',
                'gender' => 'Male',
                'created_at' => '2023-04-08 05:32:32',
                'updated_at' => '2023-04-08 05:32:32',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 12,
                'name' => 'Mustafizur Rahman',
                'email' => 'mustafiz.sub19@gmail.com',
                'phone' => '01773362382',
                'password' => '$2y$10$wt201BdMH1V6fdkn/dy9Ee4QVAPhewrdK/abe99qOi4Eme8D1pqgy',
                'address' => 'Banani',
                'gender' => 'Male',
                'created_at' => '2023-04-08 05:34:31',
                'updated_at' => '2023-04-08 05:34:31',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 13,
                'name' => 'Nabil Morshed',
                'email' => 'nabilmorshed1251@gmail.com',
                'phone' => '01999300563',
                'password' => '$2y$10$x4gDQDRp6Gf4lPLP4ivzKeF.IUFlY5AausExdPDWxkabHs8vAPum2',
                'address' => 'Bosila',
                'gender' => 'Male',
                'created_at' => '2023-04-08 05:38:53',
                'updated_at' => '2023-04-08 05:38:53',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 14,
                'name' => 'Hasanur Rahman Anik',
                'email' => 'hasanurrahmankabir@gmail.com',
                'phone' => '01796642668',
                'password' => '$2y$10$.PjAkZRSZFKG.fm5MNdRhucxlk9RqqjTGfKMHQwTew/C4Dd2iMaGa',
                'address' => 'Gulshan 2',
                'gender' => 'Male',
                'created_at' => '2023-04-08 05:40:23',
                'updated_at' => '2023-04-08 05:40:23',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 15,
                'name' => 'Abrar Faiyz Chowdhury',
                'email' => 'abrarfaiyzchowdhury@gmail.com',
                'phone' => '01635449125',
                'password' => '$2y$10$wkr9j5Ikuj9LXJr96FEyReKYosF4KBmhy06jiYat/z6OtZ8dFoyTy',
                'address' => 'Farmgate',
                'gender' => 'Male',
                'created_at' => '2023-04-08 05:42:14',
                'updated_at' => '2023-04-08 05:42:14',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 16,
                'name' => 'Shabnur Akter',
                'email' => 'shabnurakter578@gmail.com',
                'phone' => '01630910968',
                'password' => '$2y$10$twiYFmLdk.BVg8CbEUGWhO5Rj4mQdU12NRq7T75nkTNbJzucYmi8q',
                'address' => 'Zigatola',
                'gender' => 'Female',
                'created_at' => '2023-04-08 05:45:33',
                'updated_at' => '2023-04-08 05:45:33',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 17,
                'name' => 'Md. Fahim Faysal',
                'email' => 'fahimfaisalaninda@gmail.com',
                'phone' => '01883685125',
                'password' => '$2y$10$MBFLwMhWlQuhaweA0bf4puTIQGHFq7oksbTdPkkkDh76ZIr3HceEm',
                'address' => 'Agargoan',
                'gender' => 'Male',
                'created_at' => '2023-04-08 05:55:52',
                'updated_at' => '2023-04-08 05:55:52',
            ),
        ));
        
        
    }
}