<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("goal")->insert([
            'name' => 'hobby'
        ]);
        DB::table("goal")->insert([
            'name' => 'competetive'
        ]);
        DB::table("goal")->insert([
            'name' => 'fun'
        ]);
    }
}
