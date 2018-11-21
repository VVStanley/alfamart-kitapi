<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKitOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kit_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('city_pickup_code');
            $table->string('city_delivery_code');
            $table->float('price', 8, 2);
            $table->string('customer');
            $table->string('sender');
            $table->string('receiver');
            $table->string('sale_number');
            $table->string('cargo_number');
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
        Schema::dropIfExists('kit_orders');
    }
}
