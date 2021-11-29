<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncentiveRateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incentive_rate', function (Blueprint $table) {
            $table->id();
            $table->string("brand_id");
            $table->integer("model_no");
            $table->integer("model_rate");
            $table->integer("model_below_rate");
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
        Schema::dropIfExists('incentive_rate');
    }
}
