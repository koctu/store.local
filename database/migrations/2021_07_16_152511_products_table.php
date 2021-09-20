<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->default('product-###');
            $table->string('title')->default('Some Product');
            $table->string('gender');
            $table->integer('age')->unsigned()->default(0);
            $table->integer('price')->unsigned()->nullable();
            $table->string('country_id')->nullable();
            $table->string('trademark_id')->nullable();
            $table->boolean('interactive')->default('0');
            $table->integer('amount')->unsigned()->nullable();
            $table->string('size')->default('Маленькая');
            $table->integer('barcode')->unsigned()->nullable();
            $table->string('image')->default('https://loremflickr.com/180/240');
            $table->boolean('sale')->default('0');
            $table->boolean('new')->default('1');
            $table->boolean('hit')->default('0');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('country_id')->references('country_name')->on('countries');
            $table->foreign('trademark_id')->references('trademark_name')->on('trademarks');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
