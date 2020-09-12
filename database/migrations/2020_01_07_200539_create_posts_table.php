<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('seo');
            $table->string('slug')->unique();
            $table->text('small_description')->nullable();
            $table->longText('content');
            $table->text('image');
            $table->longText('images')->nullable();
            $table->text('video')->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('set null')->onDelete('set null');
            $table->bigInteger('author_id')->unsigned()->nullable();
            $table->foreign('author_id')->references('id')->on('authors')->onUpdate('set null')->onDelete('set null');
            $table->boolean('main')->default(false);
            $table->boolean('recent')->default(false);
            $table->boolean('top')->default(false);
            $table->boolean('trending')->default(false);
            $table->boolean('most')->default(false);
            $table->boolean('featured')->default(false);
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
        Schema::dropIfExists('posts');
    }
}
