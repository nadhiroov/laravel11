<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */
        $admin = User::create(
            [
                'name'  => 'pateok bin tetelan',
                'username'  => 'pateok',
                'email' => 'pateok@gmail.com',
                'email_verified_at'    => now(),
                'password'  => Hash::make('password'),
                'remember_token'    => Str::random(10)
            ]
        );

        Post::factory(100)->recycle([
            $admin,
            User::factory(17)->create(),
            Category::factory(10)->create()
        ])->create();
    }
}
