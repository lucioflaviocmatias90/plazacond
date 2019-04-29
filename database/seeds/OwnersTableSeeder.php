<?php

use Illuminate\Database\Seeder;

class OwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Owner::class, 144)->create();
        DB::table('owners')->insert([
        	['blap' => 'A/01', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
        	['blap' => 'A/02', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
        	['blap' => 'A/03', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
        	['blap' => 'A/04', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
        ]);
    }
}
