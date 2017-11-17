<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

        	'name' => 'Adrian',
        	'email' => 'a.herrera04@ufromail.cl',
        	'password' => bcrypt('admin321'),

        ]);
    }
}
