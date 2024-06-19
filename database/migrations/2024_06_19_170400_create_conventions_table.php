<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConventionsTable extends Migration
{
    public function up()
    {
        Schema::create('conventions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etudiant_id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->string('adresse_email');
            $table->string('ecole');
            $table->string('duree');
            $table->string('signature_cabinet');
            $table->string('status')->default('non traité');
            $table->timestamps();

            // Définir la clé étrangère
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('conventions');
    }
}
