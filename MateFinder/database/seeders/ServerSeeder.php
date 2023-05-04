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
            'name' => 'EU'
        ]);
        DB::table("server")->insert([
            'name' => 'Asia'
        ]);
	    DB::table("server")->insert([
            'name' => 'UK'
        ]);
        DB::table("server")->insert([
            'name' => 'USA'
        ]);
        DB::table("server")->insert([
            'name' => 'Russia'
        ]);
    }
}
