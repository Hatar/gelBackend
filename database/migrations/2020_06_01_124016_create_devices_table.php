<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string("name",64);
            $table->string("description",256)->nullable();
            $table->string('serial',16)->unique();
            $table->string('ip',15)->unique();
            $table->bigInteger("x");
            $table->bigInteger("y");
            $table->tinyInteger('level');

            $table->unsignedBigInteger('map_id');
            $table->unsignedTinyInteger('status_id')->nullable();

            $table->foreign('map_id')->references('id')->on('maps');
            $table->foreign('status_id')->references('id')->on('statuses');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devices');
    }
}
