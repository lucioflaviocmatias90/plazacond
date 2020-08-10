<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartment_owner', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('apartment_id');
            $table->uuid('owner_id');
            $table->boolean('is_current');
            $table->timestamps();
        });

        Schema::table('apartment_owner', function (Blueprint $table) {
            $table->foreign('apartment_id')->references('id')->on('apartments');
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
        Schema::dropIfExists('apartment_owner');
    }
}
