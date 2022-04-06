<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory()->create([
            'name' => 'Artem Avakyan',
            'is_admin' => 1
        ]);
        $user = User::factory()->create([
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);
    }
}
