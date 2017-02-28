<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('location_id');
            $table->string('location_type');
            $table->string('location_des');
            $table->string('location_address');
            $table->integer('province_id')->unsigned();
            $table->foreign('province_id')
                ->references('province_id')
                ->on('provinces')
                ->onDelete('cascade');
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')
                ->references('customer_id')
                ->on('customers')
                ->onDelete('cascade');
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
        Schema::dropIfExists('locations');
    }
}
