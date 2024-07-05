<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->string('adresse');
            $table->string('universite');
            $table->string('domaine');
            $table->string('niveau');
            $table->string('diplome_baccalaureat_path');
            $table->string('carte_identite_path');
            $table->json('bulletins_paths');
            $table->string('autre_diplome_path')->nullable();
            $table->string('cv_path')->nullable()->change();
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
