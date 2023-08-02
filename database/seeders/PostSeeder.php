<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title'             => 'Posting #1',
                'description'       => 'Test Posting #1',
                'user_id'           => 1
            ]
        ];

        Post::insert($posts);
    }
}

// password
