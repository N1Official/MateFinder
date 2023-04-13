<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserGamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("user_games")->insert([
            'user_id' => 1,
            'game_id' => 1,
            'goal_id' => 3,
            'rank_id' => 20,
            'level' => 15
        ]);
    }
}
