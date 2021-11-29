<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand', function (Blueprint $table) {
            $table->id();
            $table->string("brand_id");
            $table->string("brand_nm");
            $table->string("prod_type");
            $table->integer("ord_no");
            $table->integer("brand_rate");
            $table->integer("spv_rate");
            $table->integer("majumtr_1stInctv");
            $table->integer("majumtr_2ndInctv");
            $table->text("comment");
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
        Schema::dropIfExists('brand');
    }
}
