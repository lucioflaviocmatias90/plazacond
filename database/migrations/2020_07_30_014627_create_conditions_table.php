<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conditions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
        });

        DB::table('conditions')->insert([
            [   'id' => '1a1dc247-20b5-4cdf-8d58-5c63c24a3fce',
                'name' => 'vazio'
            ],
            [
                'id' => 'c4c58f76-ff97-4736-9195-79b291682770',
                'name' => 'alugado'
            ],
            [
                'id' => '0431ad36-b752-4fd5-b78d-fb92511573f2',
                'name' => 'residindo'
            ],
            [
                'id' => 'f35ec78c-6c35-42fc-8433-baa8fc1aa19b',
                'name' => 'vende-se'
            ],
            [
                'id' => 'd0ebc43d-a13c-4f0c-ae23-841adad74e1b',
                'name' => 'aluga-se'
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
        Schema::dropIfExists('conditions');
    }
}
