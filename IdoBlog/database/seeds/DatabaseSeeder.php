<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table("blogs")->insert(
    		['title'=>"test Blog",
            'month'=>1,
            'year'=>2016]);
        DB::table("users")->insert(
            ['id'=>1,
            "name"=>"ido",
            "email"=>"idoshoshani@gmail.com",
            "password"=>"espeon123",
            ]);
    }
}
