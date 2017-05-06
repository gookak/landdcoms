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
            $table->string('filename', 100)->comment('ชื่อไฟล์');
            $table->string('filetype', 50)->comment('นามสกุล');
            $table->integer('sort')->comment('เรียง');
            $table->boolean('statusdefault', 200)->default(false)->comment('ตั้งค่าเป็น defualt');
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
