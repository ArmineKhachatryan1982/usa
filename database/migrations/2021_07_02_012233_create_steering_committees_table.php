<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSteeringCommitteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steering_committees', function (Blueprint $table) {
            $table->id()->from(1000);
            $table->string('title_en');
            $table->string('title_am');
            $table->string('paragraph_one_en');
            $table->string('paragraph_one_am');
            $table->string('paragraph_two_en');
            $table->string('paragraph_two_am');
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
        Schema::dropIfExists('steering_committees');
    }
}
