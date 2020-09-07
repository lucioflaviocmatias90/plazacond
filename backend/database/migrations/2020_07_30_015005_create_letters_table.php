<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letters', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->text('observation')->nullable();
            $table->uuid('apartment_id')->nullable();
            $table->uuid('status_letter_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('letters', function (Blueprint $table) {
            $table->foreign('status_letter_id')
                ->references('id')->on('status_letters');
            $table->foreign('apartment_id')
                ->references('id')->on('apartments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('letters');
    }
}
