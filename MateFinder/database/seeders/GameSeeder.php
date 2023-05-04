<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("game")->insert([
            'name' => 'Counter-Strike:Global Offensive'
        ]);
        DB::table("game")->insert([
            'name' => 'Leauge of Legends'
        ]);
        DB::table("game")->insert([
            'name' => 'Apex Legends'
        ]);
        DB::table("game")->insert([
            'name' => 'Forza'
        ]);
    }
}
