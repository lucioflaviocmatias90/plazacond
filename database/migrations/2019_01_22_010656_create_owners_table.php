<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');  
            $table->date('birthday')->nullable(); 
            $table->string('email')->nullable();
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable();
            $table->enum('gender', ['masculino', 'feminino']);
            $table->string('phone');
            $table->string('photo_path')->nullable();
            $table->text('observation')->nullable();            
            $table->integer('apartment_id')->unsigned()->nullable();
            $table->foreign('apartment_id')->references('id')->on('apartments')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('owners');
    }
}
