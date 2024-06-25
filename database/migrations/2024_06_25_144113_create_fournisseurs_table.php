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
        Schema::create('fournisseurs', function (Blueprint $table) {
            $table->id();
            $table->integer("numero")->unique();
            $table->string("nom")->unique();
            $table->string("contact");
            $table->string("addresse");
            $table->string("ville");
            $table->string("codePostal")->nullable();
            $table->string("tel1")->unique();
            $table->string("tel2")->nullable();
            $table->string("fax")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fournisseurs');
    }
};
