<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::table('users')->insert([
    		'name' => 'tuankd',
    		'email' => 'khuongdinhtuan201@gmail.com',
    		'password' => bcrypt('123123'),
		]);
    }
}
