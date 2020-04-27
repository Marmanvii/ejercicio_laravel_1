<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InfoTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('info_id');
            $table->unsignedBigInteger('tag_id');

            $table->primary(['info_id', 'tag_id']);
            $table->foreign('info_id')->references('id')->on('infos');
            $table->foreign('tag_id')->references('id')->on('tags');

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
        //
    }
}
