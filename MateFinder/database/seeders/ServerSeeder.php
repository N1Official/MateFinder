<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("server")->insert([
            'game_id' => 1,
            'name' => 'EU'
        ]);
        DB::table("server")->insert([
            'game_id' => 2,
            'name' => 'EU'
        ]);
        DB::table("server")->insert([
            'game_id' => 1,
            'name' => 'Asia'
        ]);
        DB::table("server")->insert([
            'game_id' => 2,
            'name' => 'Asia'
        ]);
	DB::table("server")->insert([
            'game_id' => 2,
            'name' => 'UK'
        ]);
        DB::table("server")->insert([
            'game_id' => 1,
            'name' => 'USA'
        ]);
        DB::table("server")->insert([
            'game_id' => 2,
            'name' => 'USA'
        ]);
        DB::table("server")->insert([
            'game_id' => 1,
            'name' => 'Russia'
        ]);
        DB::table("server")->insert([
            'game_id' => 2,
            'name' => 'Russia'
        ]);
    }
}
