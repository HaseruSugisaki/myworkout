<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weights', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('day');
            $table->double('weight', 8, 2);
            $table->double('fatpercentage', 8, 2);
            $table->double('fatmass', 8, 2);
            $table->double('musclemass', 8, 2);
            $table->double('leanbodymass', 8, 2);
            $table->double('bmi', 8, 2);
            $table->double('west', 8, 2);
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
        Schema::dropIfExists('weights');
    }
}
