<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('good_num');//货号
            $table->integer('num');
            $table->float('price');//市场价
            $table->float('myprice');//我们的价格
            $table->text('description');
            $table->string('img_path');
            $table->integer('publish_time');
            $table->boolean('is_publish');
            $table->boolean('is_hot');

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
        Schema::drop('products');
    }
}
