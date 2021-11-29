<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddirateDpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addirate_dp', function (Blueprint $table) {
            $table->id();
            $table->integer("seq");
            $table->string("prod_type");
            $table->double("dptype_cd");
            $table->double("addirate");
            $table->double("base_addirate");
            $table->double("gap");
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
        Schema::dropIfExists('addirate_dp');
    }
}
