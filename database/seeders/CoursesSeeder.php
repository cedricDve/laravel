<?php

namespace Database\Seeders;
use App\Models\Courses;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Courses::create([            
            'startdate'=> "21-10-2021 At 8:00 AM",
            'organisator'=> "Google",
            'name'=> "IoT by Google",
            'content'=> "So much content here",
            'description'=> "You need to buy to now if it's good or not",
            'participants'=>"3",
        ],);
        Courses::create([            
            'startdate'=> "06-07-2022 At 8:00 AM",
            'organisator'=> "Cisoc",
            'name'=> "Routing & Switching by Cisco",
            'content'=> "So much content here",
            'description'=> "You need to buy to now if it's good or not",
            'participants'=>"9",
        ],);
        Courses::create([            
            'startdate'=> "31-08-1964 At 8:00 AM",
            'organisator'=> "Mother",
            'name'=> "I dont know & Yeah Yeah ",
            'content'=> "So much content here",
            'description'=> "You need to buy to now if it's good or not",
            'participants'=>"12",
        ],);
    }
}
