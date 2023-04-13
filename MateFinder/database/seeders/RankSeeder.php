<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("rank")->insert([
            'name' => 'Unranked'
        ]);
        DB::table("rank")->insert([
            'name' => 'Provisional'
        ]);
        DB::table("rank")->insert([
            'name' => 'Silver 1'
        ]);
        DB::table("rank")->insert([
            'name' => 'Silver 2'
        ]);
        DB::table("rank")->insert([
            'name' => 'Silver 3'
        ]);
        DB::table("rank")->insert([
            'name' => 'Silver 4'
        ]);
        DB::table("rank")->insert([
            'name' => 'Silver Elite'
        ]);
        DB::table("rank")->insert([
            'name' => 'Silver Elite Master'
        ]);
        DB::table("rank")->insert([
            'name' => 'Gold Nova 1'
        ]);
        DB::table("rank")->insert([
            'name' => 'Gold Nova 2'
        ]);
        DB::table("rank")->insert([
            'name' => 'Gold Nova 3'
        ]);
        DB::table("rank")->insert([
            'name' => 'Gold Nova 4'
        ]);
        DB::table("rank")->insert([
            'name' => 'Master Guardian 1'
        ]);
        DB::table("rank")->insert([
            'name' => 'Master Guardian 2'
        ]);
        DB::table("rank")->insert([
            'name' => 'Master Guardian Elite'
        ]);
        DB::table("rank")->insert([
            'name' => 'Distinguished Master Guardian'
        ]);
        DB::table("rank")->insert([
            'name' => 'Legendary Eagle'
        ]);
        DB::table("rank")->insert([
            'name' => 'Legendary Eagle Master'
        ]);
        DB::table("rank")->insert([
            'name' => 'Supreme Master First Class'
        ]);
        DB::table("rank")->insert([
            'name' => 'The Global Elite'
        ]);
        DB::table("rank")->insert([
            'name' => 'Bronze 5'
        ]);
        DB::table("rank")->insert([
            'name' => 'Bronze 4'
        ]);
        DB::table("rank")->insert([
            'name' => 'Bronze 3'
        ]);
        DB::table("rank")->insert([
            'name' => 'Bronze 2'
        ]);
        DB::table("rank")->insert([
            'name' => 'Bronze 1'
        ]);
        DB::table("rank")->insert([
            'name' => 'Silver 5'
        ]);
        DB::table("rank")->insert([
            'name' => 'Gold 5'
        ]);
        DB::table("rank")->insert([
            'name' => 'Gold 4'
        ]);
        DB::table("rank")->insert([
            'name' => 'Gold 3'
        ]);
        DB::table("rank")->insert([
            'name' => 'Gold 2'
        ]);
        DB::table("rank")->insert([
            'name' => 'Gold 1'
        ]);
        DB::table("rank")->insert([
            'name' => 'Platinum 5'
        ]);
        DB::table("rank")->insert([
            'name' => 'Platinum 4'
        ]);
        DB::table("rank")->insert([
            'name' => 'Platinum 3'
        ]);
        DB::table("rank")->insert([
            'name' => 'Platinum 2'
        ]);
        DB::table("rank")->insert([
            'name' => 'Platinum 1'
        ]);
        DB::table("rank")->insert([
            'name' => 'Diamond 5'
        ]);
        DB::table("rank")->insert([
            'name' => 'Diamond 4'
        ]);
        DB::table("rank")->insert([
            'name' => 'Diamond 3'
        ]);
        DB::table("rank")->insert([
            'name' => 'Diamond 2'
        ]);
        DB::table("rank")->insert([
            'name' => 'Diamond 1'
        ]);
    }
}
