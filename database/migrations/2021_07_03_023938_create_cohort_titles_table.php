<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCohortTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cohort_titles', function (Blueprint $table) {
            $table->id()->from(1000);
            $table->bigInteger('cohort_infos_id')->unsigned();
            $table->foreign('cohort_infos_id')->references('id')->on('cohort_infos')->onDelete('cascade')->onUpdate('cascade');
            $table->longText('date_text_en');
            $table->longText('date_text_am');
            $table->string('title_en');
            $table->string('title_am');
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
        Schema::dropIfExists('cohort_titles');
    }
}
