<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $todos = [
            [
                'title'         => 'Belajar vue js',
                'description'   => 'Belajar membuat child component'
            ]
        ];

        Todo::insert($todos);
    }
}
