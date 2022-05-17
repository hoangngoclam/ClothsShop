<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('category_id');
            $table->bigInteger('category_id_lv2')->nullable($value = true);
            $table->string('name', 200);
            $table->string('sku', 400);
            $table->string('main_image', 200);
            $table->string('sub_images', 500)->nullable($value = true);
            $table->longText('desc');
            $table->integer('technical_price')->nullable($value = true);
            $table->integer('price');
            $table->integer('promotion_price');
            $table->integer('quantity');
            $table->integer('sold');
            $table->text('meta_desc')->nullable($value = true);
            $table->text('meta_keywords')->nullable($value = true);
            $table->string('title', 300);
            $table->text('meta_title')->nullable($value = true);
            $table->string('slug', 300);
            $table->integer('brand_id');
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
        Schema::dropIfExists('products');
    }
}
