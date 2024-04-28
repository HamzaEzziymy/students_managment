<?php

use App\Models\Parente;
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
        Schema::create('eleves', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Parente::class)->constrained()->cascadeOnDelete();
            $table->string('cne', 20);
            $table->string('prenom', 20);
            $table->string('nom', 20);
            $table->date('date_naissance');
            $table->string('photo_eleve')->nullable();
            $table->enum("gender", ["m", "f"]);
            $table->string('email')->nullable();
            $table->string('phone_number', 20)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eleves');
    }
};
