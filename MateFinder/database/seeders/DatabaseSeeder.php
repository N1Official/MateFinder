<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(CategorySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(GoalSeeder::class);
        $this->call(RankSeeder::class);
        $this->call(GameSeeder::class);
        $this->call(ServerSeeder::class);
        $this->call(GameCategorySeeder::class);
        $this->call(GameRankSeeder::class);
        $this->call(UserGamesSeeder::class);
    }
}
