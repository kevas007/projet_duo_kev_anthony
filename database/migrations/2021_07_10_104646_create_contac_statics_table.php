<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContacStaticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contac_statics', function (Blueprint $table) {
            $table->id();
            $table->mediumText('titreContact');
            $table->mediumText('sous_titreContact');
            $table->mediumText('paraContact');
            $table->mediumText('name');
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
        Schema::dropIfExists('contac_statics');
    }
}
