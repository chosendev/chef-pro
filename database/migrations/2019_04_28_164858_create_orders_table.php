<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->integer('order_number');
            //$table->string('customer_name')->default('null');
            $table->string('food_combination');
            $table->string('price');
            $table->string('status');//available or not available
           // $table->integer('outside_catering_client_id');
            $table->date('date');
            $table->timestamps();

            //$table->foreign('item_id')->references('id')->on('item')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
