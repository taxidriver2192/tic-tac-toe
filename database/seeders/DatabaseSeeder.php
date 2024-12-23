<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)
            ->has(Game::factory())
            ->create();

        User::factory()->create([
            'name' => 'Lukas Test 1',
            'email' => '1@test.dk',
        ]);

        User::factory()->create([
            'name' => 'Lukas test 2',
            'email' => '2@test.dk',
        ]);
    }
}
