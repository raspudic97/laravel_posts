<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post1 = new Post();
        $post1 -> title = "First Post";
        $post1 -> body = "Lorem ...";
        $post1 -> autor = "Mile";
        $post1 -> save();

        $post2 = new Post();
        $post2 -> title = "Second Post";
        $post2 -> body = "Lorem ...";
        $post2 -> autor = "Mile Raspudic";
        $post2 -> save();
    }
}
