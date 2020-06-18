<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('type_id');
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->unsignedBigInteger('device_id')->nullable();

            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('device_id')->references('id')->on('employees');
            $table->foreign('type_id')->references('id')->on('event_types');
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
        Schema::dropIfExists('events');
    }
}
