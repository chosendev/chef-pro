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
            $table->unsignedInteger('order_number')->index();
            $table->string('food_combination');
            $table->string('price');
            $table->string('status');//available or not available
            $table->unsignedBigInteger('outside_catering_clients_id');
            $table->date('date');
            $table->foreign('outside_catering_clients_id')->references('id')->on('outside_catering_clients')->onUpdate
            ('cascade')
                ->onDelete('cascade');

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
        Schema::dropIfExists('orders');
    }
}
