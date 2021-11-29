<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddirateIncinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addirate_incins', function (Blueprint $table) {
            $table->id();
            $table->string("prod_type");
            $table->integer("inctype_cd");
            $table->string("inctype_nm");
            $table->double("addirate");
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
        Schema::dropIfExists('addirate_incins');
    }
}
