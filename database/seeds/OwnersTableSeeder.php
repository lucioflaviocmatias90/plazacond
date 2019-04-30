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
            // BLOCO A
        	['blap' => 'A/01', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
        	['blap' => 'A/02', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
        	['blap' => 'A/03', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
        	['blap' => 'A/04', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'A/11', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'A/12', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'A/13', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'A/14', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'A/21', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'A/22', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'A/23', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'A/24', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'A/31', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'A/32', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'A/33', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'A/34', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],

            // BLOCO B
            ['blap' => 'B/01', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'B/02', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'B/03', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'B/04', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'B/11', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'B/12', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'B/13', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'B/14', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'B/21', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'B/22', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'B/23', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'B/24', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'B/31', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'B/32', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'B/33', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'B/34', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],

            // BLOCO C
            ['blap' => 'C/01', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'C/02', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'C/03', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'C/04', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'C/11', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'C/12', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'C/13', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'C/14', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'C/21', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'C/22', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'C/23', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'C/24', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'C/31', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'C/32', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'C/33', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'C/34', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],

            // BLOCO D
            ['blap' => 'D/01', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'D/02', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'D/03', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'D/04', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'D/11', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'D/12', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'D/13', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'D/14', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'D/21', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'D/22', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'D/23', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'D/24', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'D/31', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'D/32', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'D/33', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'D/34', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],

            // BLOCO E
            ['blap' => 'E/01', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'E/02', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'E/03', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'E/04', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'E/11', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'E/12', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'E/13', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'E/14', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'E/21', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'E/22', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'E/23', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'E/24', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'E/31', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'E/32', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'E/33', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'E/34', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],

            // BLOCO F
            ['blap' => 'F/01', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'F/02', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'F/03', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'F/04', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'F/11', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'F/12', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'F/13', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'F/14', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'F/21', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'F/22', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'F/23', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'F/24', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'F/31', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'F/32', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'F/33', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'F/34', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],

            // BLOCO G
            ['blap' => 'G/01', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'G/02', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'G/03', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'G/04', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'G/11', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'G/12', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'G/13', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'G/14', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'G/21', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'G/22', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'G/23', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'G/24', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'G/31', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'G/32', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'G/33', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'G/34', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],

            // BLOCO H
            ['blap' => 'H/01', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'H/02', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'H/03', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'H/04', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'H/11', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'H/12', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'H/13', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'H/14', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'H/21', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'H/22', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'H/23', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'H/24', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'H/31', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'H/32', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'H/33', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'H/34', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],

            // BLOCO I
            ['blap' => 'I/01', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'I/02', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'I/03', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'I/04', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'I/11', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'I/12', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'I/13', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'I/14', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'I/21', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'I/22', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'I/23', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'I/24', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'I/31', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'I/32', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'I/33', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
            ['blap' => 'I/34', 'fullname' => '--', 'condition' => 'vazio', 'gender' => 'masculino', 'phone' => '-- '],
        ]);
    }
}
