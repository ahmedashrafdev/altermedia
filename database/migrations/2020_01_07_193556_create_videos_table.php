<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('image');
            $table->string('seo')->nullable();
            $table->text('link');
            $table->boolean('main')->default(false);
            $table->boolean('submain')->default(false);
            $table->bigInteger('author_id')->unsigned()->nullable();
            $table->foreign('author_id')->references('id')->on('authors')->onUpdate('set null')->onDelete('set null');
            $table->smallInteger('order')->default(1);
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
        Schema::dropIfExists('videos');
    }
}
