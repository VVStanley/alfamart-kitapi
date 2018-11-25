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
            $table->dateTime('datetime');
            $table->string('goods');
            $table->string('service')->nullable();
            $table->string('city_pickup_code')->nullable();
            $table->string('city_delivery_code')->nullable();
            $table->float('price', 8, 2)->nullable();
            $table->string('customer')->nullable();
            $table->string('sender')->nullable();
            $table->string('receiver')->nullable();
            $table->string('sale_number')->nullable();
            $table->string('cargo_number')->nullable();
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
