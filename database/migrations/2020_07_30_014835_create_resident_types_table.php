<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateResidentTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resident_types', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
        });

        DB::table('resident_types')->insert([
            [
                'id' => '1efd24c3-d9bd-49ac-9906-7046c6968ecc',
                'name' => 'Responsável'
            ],
            [
                'id' => 'ac81fc2a-aa36-41fa-a7d5-8bca5c63477d',
                'name' => 'Companheiro(a)'
            ],
            [
                'id' => '77c47eb3-3c96-47bb-bf4b-b8fe0171dfc9',
                'name' => 'Filho(a)'
            ],
            [
                'id' => 'a7f7b240-a6b5-4b3c-a175-9753a1366e85',
                'name' => 'Pai'
            ],
            [
                'id' => 'eddea700-12e2-4a30-91ac-c6d269fcc25d',
                'name' => 'Mãe'
            ],
            [
                'id' => '7d835959-9a67-490f-87a5-e59a1d9c9db1',
                'name' => 'Amigo(a)'
            ],
            [
                'id' => 'aea8e09c-644d-4334-b939-338ca8fb9cea',
                'name' => 'Genro'
            ],
            [
                'id' => '67eedc4f-c72d-493d-b282-ecd77379012e',
                'name' =>'Nora'
            ],
            [
                'id' => 'cde5dc6f-c55e-4cc1-8036-53224372a59a',
                'name' => 'Primo(a)'
            ],
            [
                'id' => '49171bcb-583a-4eb6-8b46-01316d4383e7',
                'name' => 'Tio(a)'
            ],
            [
                'id' => '5c3e9b4f-be50-4766-9c97-1f49f0c37887',
                'name' => 'Neto(a)'
            ],
            [
                'id' => '4cdd9e72-603a-4d90-bb53-50ede026e1f3',
                'name' => 'Avô(ó)'
            ],
            [
                'id' => 'e952d93f-ad1a-4149-9769-4fc51ddeef12',
                'name' => 'Bisavô(ó)'
            ],
            [
                'id' => '67fc5e2c-0bbc-44dd-9eeb-00319285e663',
                'name' => 'Bisneto(a)'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resident_types');
    }
}
