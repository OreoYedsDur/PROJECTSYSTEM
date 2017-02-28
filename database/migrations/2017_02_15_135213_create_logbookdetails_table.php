<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogbookdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logbookdetails', function (Blueprint $table) {
            $table->increments('logbookdetail_id');
            $table->integer('logbook_id')->unsigned();
            $table->foreign('logbook_id')
                    ->references('logbook_id')
                    ->on('logbooks')
                    ->onDelete('cascade');
            $table->text('logbookdetail_body');
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
        Schema::dropIfExists('logbookdetails');
    }
}
