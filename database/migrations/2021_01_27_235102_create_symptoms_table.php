<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSymptomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('symptoms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('visitor_id');
            $table->double('temperature');
            $table->boolean('fever')->default(false);
            $table->boolean('drycough')->default(false);
            $table->boolean('sorethroat')->default(false);
            $table->boolean('difficultbreathing')->default(false);
            $table->boolean('lossofsenses')->default(false);
            $table->boolean('fatigue')->default(false);
            $table->boolean('weakness')->default(false);
            $table->boolean('sneezing')->default(false);
            $table->boolean('diarrhoea')->default(false);
            $table->boolean('headache')->default(false);
            $table->boolean('q1')->nullable()->default(false);
            $table->boolean('q2')->nullable()->default(false);
            $table->boolean('q3')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('visitor_id')->references('id')->on('visitors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('symptoms');
    }
}
