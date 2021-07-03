<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_infos', function (Blueprint $table) {
            $table->id()->from(1000);
            $table->bigInteger('courses_id')->unsigned();
            $table->foreign('courses_id')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');
            $table->string('img_url');
            $table->longText('img_text_en');
            $table->longText('img_text_am');
            $table->string('title_en');
            $table->string('title_am');
            $table->longText('text_one_en');
            $table->longText('text_one_am');
            $table->longText('text_two_en');
            $table->longText('text_two_am');
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
        Schema::dropIfExists('courses_infos');
    }
}
