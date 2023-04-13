<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameRankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("game_rank")->insert([
            'rank_id' => '1',
            'game_id' => '1',
            'order' => 0,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '1',
            'game_id' => '2',
            'order' => 0,
        ]);
        //unranked
        DB::table("game_rank")->insert([
            'rank_id' => '2',
            'game_id' => '2',
            'order' => 5,
        ]);
        //half-unranked - lol
        DB::table("game_rank")->insert([
            'rank_id' => '21',
            'game_id' => '2',
            'order' => 10,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '22',
            'game_id' => '2',
            'order' => 20,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '23',
            'game_id' => '2',
            'order' => 30,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '24',
            'game_id' => '2',
            'order' => 40,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '25',
            'game_id' => '2',
            'order' => 50,
        ]);
        //bronz
        DB::table("game_rank")->insert([
            'rank_id' => '26',
            'game_id' => '2',
            'order' => 60,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '6',
            'game_id' => '2',
            'order' => 70,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '5',
            'game_id' => '2',
            'order' => 80,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '4',
            'game_id' => '2',
            'order' => 90,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '3',
            'game_id' => '2',
            'order' => 100,
        ]);
        //silver - lol
        DB::table("game_rank")->insert([
            'rank_id' => '3',
            'game_id' => '1',
            'order' => 10,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '4',
            'game_id' => '1',
            'order' => 20,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '5',
            'game_id' => '1',
            'order' => 30,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '6',
            'game_id' => '1',
            'order' => 40,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '7',
            'game_id' => '1',
            'order' => 50,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '8',
            'game_id' => '1',
            'order' => 60,
        ]);
        //silver - cs
        DB::table("game_rank")->insert([
            'rank_id' => '9',
            'game_id' => '1',
            'order' => 70,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '10',
            'game_id' => '1',
            'order' => 80,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '11',
            'game_id' => '1',
            'order' => 90,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '12',
            'game_id' => '1',
            'order' => 100,
        ]);
        // gold - cs
        DB::table("game_rank")->insert([
            'rank_id' => '13',
            'game_id' => '1',
            'order' => 110,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '14',
            'game_id' => '1',
            'order' => 120,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '15',
            'game_id' => '1',
            'order' => 130,
        ]);
        // mg - cs
        DB::table("game_rank")->insert([
            'rank_id' => '16',
            'game_id' => '1',
            'order' => 140,
        ]);
        // dmg - cs
        DB::table("game_rank")->insert([
            'rank_id' => '17',
            'game_id' => '1',
            'order' => 150,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '18',
            'game_id' => '1',
            'order' => 160,
        ]);
        // le - cs
        DB::table("game_rank")->insert([
            'rank_id' => '19',
            'game_id' => '1',
            'order' => 170,
        ]);
        // sup - cs
        DB::table("game_rank")->insert([
            'rank_id' => '20',
            'game_id' => '1',
            'order' => 180,
        ]);
        // global - cs
        DB::table("game_rank")->insert([
            'rank_id' => '27',
            'game_id' => '2',
            'order' => 110,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '28',
            'game_id' => '2',
            'order' => 120,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '29',
            'game_id' => '2',
            'order' => 130,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '30',
            'game_id' => '2',
            'order' => 140,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '31',
            'game_id' => '2',
            'order' => 150,
        ]);
        // gold - lol
        DB::table("game_rank")->insert([
            'rank_id' => '32',
            'game_id' => '2',
            'order' => 160,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '33',
            'game_id' => '2',
            'order' => 170,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '34',
            'game_id' => '2',
            'order' => 180,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '35',
            'game_id' => '2',
            'order' => 190,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '36',
            'game_id' => '2',
            'order' => 200,
        ]);
        // plat - lol
        DB::table("game_rank")->insert([
            'rank_id' => '37',
            'game_id' => '2',
            'order' => 210,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '38',
            'game_id' => '2',
            'order' => 220,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '39',
            'game_id' => '2',
            'order' => 230,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '40',
            'game_id' => '2',
            'order' => 240,
        ]);
        DB::table("game_rank")->insert([
            'rank_id' => '41',
            'game_id' => '2',
            'order' => 250,
        ]);
    }
}
