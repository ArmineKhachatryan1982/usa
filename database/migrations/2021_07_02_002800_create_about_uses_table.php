<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_uses', function (Blueprint $table) {
            $table->id()->from(1000);
            $table->longText('paragraph_one_en');
            $table->longText('paragraph_one_am');
            $table->longText('paragraph_two_en');
            $table->longText('paragraph_two_am');
            $table->longText('paragraph_tree_en');
            $table->longText('paragraph_tree_am');
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
        Schema::dropIfExists('about_uses');
    }
}
