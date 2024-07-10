<?php
use App\Models\SousCategorie;

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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string("code")->unique();
            $table->string("designation")->unique();
            $table->string("marque")->nullable();
            $table->integer("quantiteMin");
            $table->boolean("gerer")->default(false);
            $table->string("refArticle")->nullable();
            $table->decimal("prixAchatHt")->nullable();
            $table->boolean("remise")->default(false);
            $table->decimal("prixMinTc")->nullable();
            $table->decimal("pv1")->nullable();
            $table->decimal("pv2")->nullable();
            $table->decimal("pv3")->nullable();
            $table->integer("qteStock")->nullable();
            $table->string("codeTva")->nullable();
            $table->foreignIdFor(SousCategorie::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
