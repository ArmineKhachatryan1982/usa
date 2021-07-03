<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCohortInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cohort_infos', function (Blueprint $table) {
            $table->id()->from(1000);
            $table->bigInteger('cohorts_id')->unsigned();
            $table->foreign('cohorts_id')->references('id')->on('cohorts')->onDelete('cascade')->onUpdate('cascade');
            $table->string('img_url');
            $table->string('info_en');
            $table->string('info_am');
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
        Schema::dropIfExists('cohort_infos');
    }
}
