<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsrateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insrate', function (Blueprint $table) {
            $table->id();
            $table->integer("seq");
            $table->string("ins_type");
            $table->integer("ins_no");
            $table->integer("from_val");
            $table->integer("to_val");
            $table->double("fstyear");
            $table->double("sndyear");
            $table->string("vhc_type");
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
        Schema::dropIfExists('insrate');
    }
}
