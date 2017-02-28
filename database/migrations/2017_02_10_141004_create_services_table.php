<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('service_id');

            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')
                ->references('project_id')
                ->on('projects')
                ->onDelete('cascade');

            $table->integer('location_id')->unsigned();
            $table->foreign('location_id')
                ->references('location_id')
                ->on('locations')
                ->onDelete('cascade');

            $table->integer('servicetype_id')->unsigned();
            $table->foreign('servicetype_id')
                ->references('servicetype_id')
                ->on('servicetypes')
                ->onDelete('cascade');

            $table->integer('package_id')->unsigned();
            $table->foreign('package_id')
                ->references('package_id')
                ->on('packages')
                ->onDelete('cascade');

            $table->string('service_status');
            $table->string('service_order');

            $table->string('domedown');
            $table->string('domeup');

            $table->string('interdown');
            $table->string('interup');


            $table->date('gen_date')->nullable();
            $table->date('open_commit')->nullable();
            $table->date('start_contract')->nullable();
            $table->date('end_contract')->nullable();


            $table->string('cacti_url');
            $table->string('ipptp');
            $table->longText('remark');

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
        Schema::dropIfExists('services');
    }
}
