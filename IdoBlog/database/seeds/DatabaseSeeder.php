<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert(
            ['id'=>1,
            "name"=>"ido",
            "email"=>"idoshoshani@gmail.com",
            "password"=>Hash::make("espeon123"),
            ]);
    }
}
