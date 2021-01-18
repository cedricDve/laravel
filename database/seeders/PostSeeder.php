<?php

namespace Database\Seeders;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Post::create([
            'title'=> "Here is an example of a Post Title",
            'content'=> "Here is an example of a Post Content",
            'user_id'=> "1"
        ]);
    }
}
