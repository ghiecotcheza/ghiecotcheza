<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnginesTable extends Migration
{
    public function up()
    {
        Schema::create('engines', function (Blueprint $table) 
        {
            $table->id('id');
            $table->unsignedInteger('model_id');
            $table->string('engine_name');
            $table->timestamps();
            $table->foreign('mode_id')
                  ->references('id')
                  ->on('car_models')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('engines');
    }
}
