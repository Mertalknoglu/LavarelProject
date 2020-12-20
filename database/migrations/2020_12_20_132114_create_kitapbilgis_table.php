<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKitapbilgisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kitapbilgis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('isbnno');
            $table->string('kitapadi');
            $table->unsignedBigInteger('yazarid');
            $table->unsignedBigInteger('kategoriid');
            $table->unsignedBigInteger('yayineviid');
            $table->string('dil');
            $table->integer('sayfasayisi');
            $table->foreign('yazarid')->references('id')->on('yazars');
            $table->foreign('kategoriid')->references('id')->on('kategoris');
            $table->foreign('yayineviid')->references('id')->on('yayinevis');

            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kitapbilgis');
    }
}
