<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateStatusLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_letters', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
        });

        DB::table('status_letters')->insert([
            [
                'id' => '03ccc3aa-d764-4ec5-b874-51e5e4759722',
                'name' => 'Portaria',
            ],
            [
                'id' => '87841103-9db7-496d-9734-3648acfb46fd',
                'name' => 'Entregue',
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
        Schema::dropIfExists('status_letters');
    }
}
