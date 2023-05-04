<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SearcherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("searchers")->insert([
            'username' => 'N1Official',
            'profilelink' => 'https://www.facebook.com/NiGhtMaRRRRRRRe/',
            'game_id' => '1',
            'goal_id' => '2',
            'server_id' => '1',
            'gender_id' => '1',
            'last_online' => '2023.05.05.',
        ]);
        DB::table("searchers")->insert([
            'username' => 'xXxKillerxXx',
            'profilelink' => 'https://steamcommunity.com/id/Drinkcyanide',
            'game_id' => '2',
            'goal_id' => '1',
            'server_id' => '1',
            'gender_id' => '1',
            'last_online' => '2023.05.02.',
        ]);
        DB::table("searchers")->insert([
            'username' => 'xXxKillerxXx',
            'profilelink' => 'https://steamcommunity.com/id/Drinkcyanide',
            'game_id' => '1',
            'goal_id' => '2',
            'server_id' => '1',
            'gender_id' => '1',
            'last_online' => '2023.05.05.',
        ]);
        DB::table("searchers")->insert([
            'username' => 'N1Official',
            'profilelink' => 'https://www.facebook.com/NiGhtMaRRRRRRRe/',
            'game_id' => '2',
            'goal_id' => '2',
            'server_id' => '1',
            'gender_id' => '1',
            'last_online' => '2023.05.05.',
        ]);
        DB::table("searchers")->insert([
            'username' => 'PeterKate',
            'profilelink' => 'https://steamcommunity.com/id/0mis',
            'game_id' => '1',
            'goal_id' => '2',
            'server_id' => '1',
            'gender_id' => '2',
            'last_online' => '2023.05.05.',
        ]);
        DB::table("searchers")->insert([
            'username' => 'PeterKate',
            'profilelink' => 'https://steamcommunity.com/id/0mis',
            'game_id' => '2',
            'goal_id' => '2',
            'server_id' => '1',
            'gender_id' => '2',
            'last_online' => '2023.05.05.',
        ]);
    }
}
