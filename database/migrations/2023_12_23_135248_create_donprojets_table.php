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
        Schema::create('donprojets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donateur_id')->constrained()->onUpdate('cascade');
            $table->foreignId('projet_id')->constrained()->onUpdate('cascade');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donprojets');
    }
};
