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
            $table->string('code', 10)->comment('เลขที่ใบสั่งซื้อ');
            $table->integer('sumnumber')->nullable()->comment('รวมจำนวนสินค้าทั้งหมด');
            $table->decimal('sumprice', 5, 2)->nullable()->comment('รวมราคาสินค้าทั้งหมด');
            $table->decimal('fee', 5, 2)->nullable()->comment('ค่าธรรมเนียม');
            $table->decimal('promotion', 5, 2)->nullable()->comment('ส่วนลด');
            $table->decimal('totalprice', 5, 2)->nullable()->comment('ราคาสุทธิ');
            $table->string('emscode', 100)->nullable()->comment('รหัสพัสดุ');
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
