<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->id();
            $table->string("nom")->default("La Santé");
            $table->string("adresse")->default("Hoinmè-Fusion avenue de Djègan-Kpevi");
            $table->string("ville")->default("Porto-Novo");
            $table->string("codePostal")->nullable();
            $table->string("tel")->default("+229 56 52 52 52");
            $table->string("fax")->nullable();
            $table->string("email")->default("pharmacie@gmail.com");
            $table->string("banque")->nullable();
            $table->integer("tva1")->default(31);
            $table->integer("tva2")->default(20);
            $table->integer("tva3")->default(0);
            $table->integer("tva4")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pharmacies');
    }
};
