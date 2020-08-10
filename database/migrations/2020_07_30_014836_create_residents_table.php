<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('fullname');
            $table->string('photo_path')->nullable();
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable();
            $table->enum('gender', ['masculino', 'feminino']);
            $table->date('birthday')->nullable();
            $table->string('phone')->nullable();
            $table->uuid('resident_type_id');
            $table->uuid('owner_id');

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('residents', function (Blueprint $table) {
            $table->foreign('resident_type_id')
                ->references('id')
                ->on('resident_types');
            $table->foreign('owner_id')->references('id')->on('owners');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('residents');
    }
}
