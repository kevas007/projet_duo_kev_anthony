<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('i_1');
            $table->string('i_2');
            $table->string('i_3');
            $table->string('email');
            $table->string('titre1');
            $table->string('paragraphe');
            $table->string('titre2');
            $table->string('li_1');
            $table->string('li_2');
            $table->string('li_3');
            $table->string('titre3');
            $table->string('li_4');
            $table->string('li_5');
            $table->string('li_6');
            $table->string('titre4');
            $table->string('li_7');
            $table->string('li_8');
            $table->string('li_9');
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
        Schema::dropIfExists('footers');
    }
}
