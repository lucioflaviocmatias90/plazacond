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
        	'name' => 'Administrador',
	        'email' => 'admin@email.com',
	        'email_verified_at' => now(),
	        'password' => bcrypt('admin123'),
	        'remember_token' => str_random(10),
        ]);
    }
}
