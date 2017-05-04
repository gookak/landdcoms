<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_image', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            // $table->integer('product_id')->unsigned();
            // $table->foreign('product_id')->references('id')->on('product');
            $table->string('filename', 100)->nullable()->comment('ชื่อ');
            $table->string('filetype', 100)->nullable()->comment('นามสกุลไฟล์ (.jpg, .png, ฯลฯ)');
            $table->integer('sort')->comment('เรียง');
            $table->boolean('main')->comment('ต้องค่าเป็นรูปหลัก (true, false)');
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
        Schema::dropIfExists('product_image');
    }
}
