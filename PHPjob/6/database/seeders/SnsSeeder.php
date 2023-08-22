<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class SnsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'id' => '1',
            'user_id' => '1',
            'body' => 'hello',
        ]);

        Post::create([
            'id' => '2',
            'user_id' => '2',
            'body' => 'こんにちは',
        ]);

        Post::create([
            'id' => '3',
            'user_id' => '3',
            'body' => 'さよなら',
        ]);
    }
}
