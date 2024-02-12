<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Admin
        DB::table('users')->insert([


            [

                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'mehediofficials28@gmail.com',
                'password' => Hash::make('mehedi449'),
                'role' => 'admin',
                'status' => 'active',

            ],

            //Staff
            [
                'name' => 'Staff',
                'username' => 'staff',
                'email' => 'staff@gmail.com',
                'password' => Hash::make('mehedi449'),
                'role' => 'staff',
                'status' => 'active',
            ],

            //User

            [

                'name' => 'user',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('mehedi449'),
                'role' => 'user',
                'status' => 'active',

            ],



        ]);
    }
}
