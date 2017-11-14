<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('名称');
            $table->string('describe')->nullable()->comment('简介');
            $table->string('icon')->nullable()->comment('显示图标');
            $table->string('slug')->comment('路由名称');
            $table->integer('weight')->default(0)->comment('显示排序');
            $table->integer('top_id')->references('id')->on('menus')->onDelete('cascade')->default(0)->comment('父级ID，默认为零');
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
        Schema::dropIfExists('menus');
    }
}
