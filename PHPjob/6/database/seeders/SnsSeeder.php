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
            'user_id' => '0001',
            'body' => 'hello',
        ]);

        Post::create([
            'id' => '2',
            'user_id' => '0002',
            'body' => 'こんにちは',
        ]);

        Post::create([
            'id' => '3',
            'user_id' => '0003',
            'body' => 'さよなら',
        ]);
    }
}
