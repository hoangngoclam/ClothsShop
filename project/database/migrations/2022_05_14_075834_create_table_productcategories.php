<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProductcategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parentId');
            $table->tinyInteger('show_flag')->default(0);
            $table->string('name', 200);
            $table->string('image', 500);
            $table->string('title', 200);
            $table->string('slug', 200);
            $table->text('meta_title');
            $table->text('meta_desc');
            $table->text('meta_keywords');
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
        Schema::dropIfExists('product_categories');
    }
}
