<?php

use Illuminate\Database\Seeder;

class ResidentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resident_types')->insert([
            [ 'name' => 'Responsável' ],
            [ 'name' => 'Companheiro(a)' ],
            [ 'name' => 'Filho(a)' ],
            [ 'name' => 'Pai' ],
            [ 'name' => 'Mãe' ],
            [ 'name' => 'Amigo(a)' ],
            [ 'name' => 'Genro' ],
            [ 'name' =>'Nora' ],
            [ 'name' => 'Primo(a)' ],
            [ 'name' => 'Tio(a)' ],
            [ 'name' => 'Neto(a)' ],
            [ 'name' => 'Avô(ó)' ],
            [ 'name' => 'Bisavô(ó)' ],
            [ 'name' => 'Bisneto(a)' ],
        ]);
    }
}
