<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_detail', function (Blueprint $table) {
            $table->id('order_id');
            $table->unsignedBigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('product_id')->on('product');
            $table->integer('quantity');
            $table->unsignedBigInteger('id_order')->unsigned();
            $table->foreign('id_order')->references('order_id')->on('order');
            $table->integer('number');
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
        Schema::dropIfExists('order_detail');
    }
}
