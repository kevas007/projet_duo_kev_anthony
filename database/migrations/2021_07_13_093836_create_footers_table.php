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

            $table->string('titre1');
            $table->string('paragraphe');
            $table->string('titre2');
            $table->string('phone');
            $table->string('fax');
            $table->string('email');
            $table->string('titre3');
            $table->string('lien1');
            $table->string('lien2');
            $table->string('lien3');
            $table->string('titre4');
            $table->string('name');
            $table->string('lieu');
            $table->string('path');

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
