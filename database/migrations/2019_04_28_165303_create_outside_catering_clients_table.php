<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutsideCateringClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outside_catering_clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('client_name');
            $table->string('address');
            $table->unsignedInteger('outside_catering_packages_id')->index();
            $table->date('date');
            $table->timestamps();
            $table->foreign('outside_catering_packages_id')->references('id')->on('outside_catering_packages')->onUpdate
            ('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outside_catering_clients');
    }
}
