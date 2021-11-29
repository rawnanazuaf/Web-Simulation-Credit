<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePremiumInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('premium_ins', function (Blueprint $table) {
            $table->id();
            $table->integer("disaster_type_no");
            $table->integer("ins_type_no");
            $table->string("ins_type");
            $table->integer("from_val");
            $table->integer("to_val");
            $table->double("fstyear");
            $table->double("sndyear");
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
        Schema::dropIfExists('premium_ins');
    }
}
