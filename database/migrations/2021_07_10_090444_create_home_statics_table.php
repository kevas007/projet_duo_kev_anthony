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
            $table->mediumText('para2');
            $table->mediumText('sous_titre1');
            $table->mediumText('para3');
            $table->string('ahref');
            $table->mediumText('sous_titre2');
            $table->mediumText('para4');
            $table->mediumText('titreBlog');
            $table->mediumText('sous_titreBlog');
            $table->mediumText('paraBlog');
            $table->mediumText('titrePortfolio');
            $table->mediumText('sous_titrePortfolio');
            $table->mediumText('btn-sousTitre');
            $table->mediumText('titreContact');
            $table->mediumText('sous_titreContact');
            $table->mediumText('paraContact');
            $table->mediumText('companyName');
            $table->mediumText('phone');
            $table->mediumText('fax');
            $table->string('email');
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
