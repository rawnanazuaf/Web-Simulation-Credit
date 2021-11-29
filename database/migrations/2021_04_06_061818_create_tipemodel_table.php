<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipemodelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipemodel', function (Blueprint $table) {
            $table->id();
            $table->string("brand_id");
            $table->integer("model_no");
            $table->string("model_nm");
            $table->integer("category_no");
            $table->text("comment");
            $table->string("vhc_type");
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
        Schema::dropIfExists('tipemodel');
    }
}
