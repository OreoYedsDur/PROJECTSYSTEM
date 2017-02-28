<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('sale_id');
            $table->string('sale_name');
            $table->string('sale_tel');
            $table->string('sale_email');
            $table->string('sale_line');
            $table->string('sale_address');
            $table->integer('groupsale_id')->unsigned();
            $table->foreign('groupsale_id')
                ->references('groupsale_id')
                ->on('groupsales')
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
        Schema::dropIfExists('sales');
    }
}
