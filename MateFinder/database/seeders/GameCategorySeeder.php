<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("game_category")->insert([
            'game_id' => '1',
            'category_id' => '1',
        ]);
        DB::table("game_category")->insert([
            'game_id' => '1',
            'category_id' => '15',
        ]);
        DB::table("game_category")->insert([
            'game_id' => '1',
            'category_id' => '16',
        ]);
        DB::table("game_category")->insert([
            'game_id' => '2',
            'category_id' => '15',
        ]);
        DB::table("game_category")->insert([
            'game_id' => '2',
            'category_id' => '5',
        ]);
        DB::table("game_category")->insert([
            'game_id' => '1',
            'category_id' => '2',
        ]);
    }
}
