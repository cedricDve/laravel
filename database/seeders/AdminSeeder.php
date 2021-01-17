<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create a User that is an Administrator
        /*
        * name = admin
        * password =12345678
        ** The way a user became an Administrator is by having the "admin"-value on 1 inside the user-table
         */

        User::create(
            [
               "name" => 'admin',
               "email" => 'admin@gmail.com',          
               "admin" => 1, 
               "password" => bcrypt('12345678'),
            ]
            );
    }
}
