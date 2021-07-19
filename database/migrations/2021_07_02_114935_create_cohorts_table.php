<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCohortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cohorts', function (Blueprint $table) {
            $table->id()->from(1000);
            $table->longText('text_en');
            $table->longText('text_am');
            $table->longText('data_one_am');
            $table->longText('data_one_en');
            $table->longText('data_two_am');
            $table->longText('data_two_en');
            $table->longText('title_one_am');
            $table->longText('title_one_en');
            $table->longText('title_two_am');
            $table->longText('title_two_ens');
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
        Schema::dropIfExists('cohorts');
    }
}
