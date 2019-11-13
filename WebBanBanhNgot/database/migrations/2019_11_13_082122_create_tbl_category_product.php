<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCategoryProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_category_product', function (Blueprint $table) {
            $table->increments('category_id');
            $table->string('category_name');
            $table->integer('category_unit_price');
            $table->integer('category_promotion_price');
            $table->text('category_image');
            $table->text('category_unit');
            $table->text('category_type');
            $table->text('category_desc');
            $table->text('category_new');
            $table->integer('category_status');
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
        Schema::dropIfExists('tbl_category_product');
    }
}
