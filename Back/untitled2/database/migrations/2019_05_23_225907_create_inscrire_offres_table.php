<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscrireOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscrire_offres', function (Blueprint $table) {
            $table->unsignedBigInteger('id_condidat');
            $table->unsignedBigInteger('id_offre');
            $table->timestamps();

            $table->foreign('id_condidat')->references('id')->on('Condidats')->onDelete('cascade');
            $table->foreign('id_offre')->references('id')->on('Offre')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscrire__offres');
    }
}
