<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFooterSocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_socs', function (Blueprint $table) {
            $table->id()->from(1000);
            $table->bigInteger('footer_info_id')->unsigned();
            $table->foreign('footer_info_id')->references('id')->on('footer_infos')->onDelete('cascade')->onUpdate('cascade');
            $table->string('icon_name');
            $table->string('icon_link');
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('footer_socs');
    }
}
