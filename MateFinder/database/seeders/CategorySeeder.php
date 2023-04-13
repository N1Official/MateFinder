<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("category")->insert([
            'name' => 'Akció'
        ]);
        DB::table("category")->insert([
            'name' => 'Ügyességi'
        ]);
        DB::table("category")->insert([
            'name' => 'Kaland'
        ]);
        DB::table("category")->insert([
            'name' => 'Szerepjáték'
        ]);
        DB::table("category")->insert([
            'name' => 'Stratégiai'
        ]);
        DB::table("category")->insert([
            'name' => 'Menedzselős'
        ]);
        DB::table("category")->insert([
            'name' => 'Logikai'
        ]);
        DB::table("category")->insert([
            'name' => 'Szimulátor'
        ]);
        DB::table("category")->insert([
            'name' => 'Sport'
        ]);
        DB::table("category")->insert([
            'name' => 'Lexikális tudás alapú'
        ]);
        DB::table("category")->insert([
            'name' => 'Szerencsejáték'
        ]);
        DB::table("category")->insert([
            'name' => 'Verekedős'
        ]);
        DB::table("category")->insert([
            'name' => 'Táblajáték'
        ]);
        DB::table("category")->insert([
            'name' => 'Egyjátékos'
        ]);
        DB::table("category")->insert([
            'name' => 'Többjátékos'
        ]);
        DB::table("category")->insert([
            'name' => 'FPS'
        ]);
        DB::table("category")->insert([
            'name' => 'TPS'
        ]);
    }
}
