<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	//home
	        [
	            'last_name' => 'Li',
	            'email' => 'test@gmail.com',
                'password' => bcrypt('123456'),
	        ],
        ]);
    }
}
