<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeDynamiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_dynamiques', function (Blueprint $table) {
            $table->id();
            $table->string('i1_service');
            $table->string('h4_1_service');
            $table->string('p1_service');
            $table->string('i2_service');
            $table->string('h4_2_service');
            $table->string('p2_service');
            $table->string('i3_service');
            $table->string('h4_3_service');
            $table->string('p3_service');
            $table->string('i4_service');
            $table->string('h4_4_service');
            $table->string('p4_service');
            $table->string('p5_service');
            $table->string('ahref_service');
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
        Schema::dropIfExists('home_dynamiques');
    }
}
