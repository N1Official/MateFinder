<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            'username' => 'N1Official',
            'firstName' => 'László',
            'lastName' => 'Dao',
            'email' => 'dao.laszlo03@gmail.com',
            'phone' => '+36706229262',
            'password' => 'secretpass',
            'country' => 'Magyarország',
            'state' => 'Pest',
            'city' => 'Budapest',
            'zipcode' => '1102',
            'address' => 'Kőrösi Csoma Sándor út 27',
        ]);
    }
}
