<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumniAssociationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni_associations', function (Blueprint $table) {
            $table->id()->from(1000);
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
        Schema::dropIfExists('alumni_associations');
    }
}
