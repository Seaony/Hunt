<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('triggers', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('cover');
            $table->string('describe');
            $table->string('link');
            $table->string('form')->nullable();
            $table->integer('read_count')->default(0);
            $table->integer('favorite_count')->default(0);
            $table->boolean('is_active')->default(true);
            $table->integer('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->integer('tag_id')->references('id')->on('tags')->onDelete('cascade');
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
        Schema::dropIfExists('triggers');
    }
}
