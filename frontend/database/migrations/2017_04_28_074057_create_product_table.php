<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('code', 10)->comment('รหัสสินค้า (2017000001)');
            $table->string('name', 200)->comment('ชื่อ');
            $table->string('image', 200)->nullable()->comment('รูปที่ใช้แสดง');
            $table->decimal('price', 5, 2)->comment('ราคา');
            $table->integer('balance')->comment('จำนวนคงเหลือ');
            $table->text('detail')->nullable()->comment('รายละเอียด');
            $table->text('html')->nullable()->comment('เอาไว้เก็บ tag html');
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
        Schema::dropIfExists('product');
    }
}
