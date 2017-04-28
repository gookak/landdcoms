<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->integer('address_id');
            $table->integer('transportstatus_id');
            $table->string('code', 10);
            $table->integer('sumnumber');
            $table->decimal('sumprice', 5, 2);
            $table->decimal('fee', 5, 2);
            $table->decimal('promotion', 5, 2);
            $table->decimal('totalprice', 5, 2);
            $table->string('emscode', 100);
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
        Schema::dropIfExists('order');
    }
}
