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
            'avatar' => 'teso1.png',
            'game_id' => '1',
            'goal' => 'Competetive',
            'server' => 'EU',
            'gender' => 'Male',
            'last_online' => '2023.05.05.',
        ]);
        DB::table("searchers")->insert([
            'username' => 'xXxKillerxXx',
            'profilelink' => 'https://steamcommunity.com/id/Drinkcyanide',
            'avatar' => 'teso2.png',
            'game_id' => '2',
            'goal' => 'Hobby',
            'server' => 'EU',
            'gender' => 'Male',
            'last_online' => '2023.05.02.',
        ]);
        DB::table("searchers")->insert([
            'username' => 'xXxKillerxXx',
            'profilelink' => 'https://steamcommunity.com/id/Drinkcyanide',
            'avatar' => 'teso2.png',
            'game_id' => '1',
            'goal' => 'Competetive',
            'server' => 'EU',
            'gender' => 'Male',
            'last_online' => '2023.05.05.',
        ]);
        DB::table("searchers")->insert([
            'username' => 'N1Official',
            'profilelink' => 'https://www.facebook.com/NiGhtMaRRRRRRRe/',
            'avatar' => 'teso1.png',
            'game_id' => '2',
            'goal' => 'Competetive',
            'server' => 'EU',
            'gender' => 'Male',
            'last_online' => '2023.05.05.',
        ]);
        DB::table("searchers")->insert([
            'username' => 'PeterKate',
            'profilelink' => 'https://steamcommunity.com/id/0mis',
            'avatar' => 'teso3.png',
            'game_id' => '1',
            'goal' => 'Competetive',
            'server' => 'EU',
            'gender' => 'Female',
            'last_online' => '2023.05.05.',
        ]);
        DB::table("searchers")->insert([
            'username' => 'PeterKate',
            'profilelink' => 'https://steamcommunity.com/id/0mis',
            'avatar' => 'teso3.png',
            'game_id' => '2',
            'goal' => 'Competetive',
            'server' => 'EU',
            'gender' => 'Female',
            'last_online' => '2023.05.05.',
        ]);
        DB::table("searchers")->insert([
            'username' => 'levi0415',
            'profilelink' => 'https://s.team/p/cknc-rntw/HJVPDHKG',
            'avatar' => 'teso1.png',
            'game_id' => '1',
            'goal' => 'Competetive',
            'server' => 'EU',
            'gender' => 'Male',
            'last_online' => '2023.05.15.',
        ]);
        DB::table("searchers")->insert([
            'username' => 'levi0415',
            'profilelink' => 'https://www.facebook.com/levente.magyari.96',
            'avatar' => 'teso2.png',
            'game_id' => '2',
            'goal' => 'Competetive',
            'server' => 'EU',
            'gender' => 'Male',
            'last_online' => '2023.05.15.',
        ]);
        DB::table("searchers")->insert([
            'username' => 'no office pls',
            'profilelink' => 'https://steamcommunity.com/profiles/76561198121426783',
            'avatar' => 'teso1.png',
            'game_id' => '1',
            'goal' => 'Competetive',
            'server' => 'EU',
            'gender' => 'Male',
            'last_online' => '2023.05.15.',
        ]);
        DB::table("searchers")->insert([
            'username' => 'Haintor',
            'profilelink' => 'https://steamcommunity.com/profiles/76561198440460827',
            'avatar' => 'teso1.png',
            'game_id' => '2',
            'goal' => 'Competetive',
            'server' => 'EU',
            'gender' => 'Male',
            'last_online' => '2023.05.15.',
        ]);
        DB::table("searchers")->insert([
            'username' => 'Dyerex',
            'profilelink' => 'https://steamcommunity.com/profiles/76561198121426783',
            'avatar' => 'teso2.png',
            'game_id' => '2',
            'goal' => 'Competetive',
            'server' => 'EU',
            'gender' => 'Male',
            'last_online' => '2023.05.15.',
        ]);
    }
}
