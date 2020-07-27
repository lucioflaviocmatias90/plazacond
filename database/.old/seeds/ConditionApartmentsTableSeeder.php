<?php

use Illuminate\Database\Seeder;

class ConditionApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('condition_apartments')->insert([
            [ 'name' => 'vazio' ],
            [ 'name' => 'alugado' ],
            [ 'name' => 'residindo' ],
            [ 'name' => 'vende-se' ],
            [ 'name' => 'aluga-se' ],
        ]);
    }
}
