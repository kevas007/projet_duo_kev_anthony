<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeStaticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_statics', function (Blueprint $table) {
            $table->id();
            $table->mediumText('titreHome');
            $table->mediumText('para1');
            $table->mediumText('para2 ');
            $table->mediumText('img');
            $table->mediumText('sous_titre1');
            $table->mediumText('para3');
            $table->string('ahref');
            $table->mediumText('sous_titre2');
            $table->mediumText('para4');
            $table->mediumText('para5');
            $table->string('ahref2');
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
        Schema::dropIfExists('home_statics');
    }
}
