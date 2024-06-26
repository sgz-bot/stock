<?php

use App\Models\DroitAcces;
use App\Models\Utilisateur;

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
        Schema::create('utilisateur_droit_acces', function (Blueprint $table) {
            $table->id();
            $table->boolean("statut")->default(false);
            $table->foreignIdFor(DroitAcces::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Utilisateur::class)->constrained()->cascadeOnDelete();
            $table->unique(['droit_acces_id', 'utilisateur_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateur_droit_acces');
    }
};
