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
        Schema::create('donmateriels', function (Blueprint $table) {
            $table->id();
            $table->string('adresse');
            $table->string('telephone');
            // $table->foreignId('donprojet_id')->constrained()->onUpdate('cascade');
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
        Schema::dropIfExists('donmateriels');
    }
};
