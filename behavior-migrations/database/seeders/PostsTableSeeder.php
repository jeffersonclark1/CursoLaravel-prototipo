<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use LaraDev\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()->count(1)->create();
    }
}
