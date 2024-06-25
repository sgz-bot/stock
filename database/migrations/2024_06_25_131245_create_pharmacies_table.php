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
            $table->string("nom")->unique();
            $table->string("addresse");
            $table->string("ville");
            $table->string("codePostal")->nullable();
            $table->string("tel");
            $table->string("fax")->nullable();
            $table->string("email")->nullable();
            $table->string("banque")->nullable();
            $table->string("decimal")->nullable();
            $table->integer("objectifJournalier")->nullable();
            $table->string("symbolMonetaire")->nullable();
            $table->integer("tva1")->default(0);
            $table->integer("tva2")->default(0);
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
