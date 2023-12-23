<?php

use App\Models\Donateur;
use App\Models\Projet;
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
        Schema::create('donfinancieres', function (Blueprint $table) {
            $table->id();
            $table->float('montant');
            $table->string('ethode_paiement');
            $table->foreignIdFor(Donateur::class)->constrained()->onUpdate('cascade');
            $table->foreignIdFor(Projet::class)->constrained()->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donfinancieres');
    }
};
