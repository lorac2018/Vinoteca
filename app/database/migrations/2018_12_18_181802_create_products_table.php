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
            $table->integer('categories')->references('id')->on('categories');
            $table->integer('sub_category')->references('id')->on('sub_categories')->onDelete('cascade');
            $table->text('name');
            $table->text('brand');
            $table->integer('Level of Alcohol');
            $table->float('price');
            $table->integer('quantity');
            $table->integer('state');
            $table->integer('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->integer('modified_by')->references('id')->on('users')->nullable()->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
