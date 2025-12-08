<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_product', function (Blueprint $table) {
            $table->increments("id");
            $table->string('product_name');
            $table->text('description');
            $table->Integer('price');
            
            $table->unsignedInteger("category_id");
            $table->foreign("category_id")->references("id")->on("category")->onDelete("cascade");
            $table->unsignedInteger("subcategory_id");
            $table->foreign("subcategory_id")->references("id")->on("subcategory")->onDelete("cascade");
            
            $table->integer('QTY');
            $table->string('product_image');
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
        Schema::dropIfExists('_product');
    }
};
