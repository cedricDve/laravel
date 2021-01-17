<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     // create random user and a 'simple' user
     /*
     ** 'simple' user credentials
     * name = user
     * password = 12345678
     */
     User::create(       
         [       
         'name' => Str::random(8),
         'email' => Str::random(10).'@gmail.com',
         'password' => Hash::make('password'),
         'status' => 'student',
         'biography' => Str::random(25),
         ],[
            'name' => 'user',
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('12345678'),
            'status' => 'student',
            'biography' => Str::random(25),
         ],
         );
        //
    
    }
}
