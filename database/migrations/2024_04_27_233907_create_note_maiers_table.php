<?php

use App\Models\Eleve;
use App\Models\Matier;
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
        Schema::create('note_maiers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Eleve::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Matier::class)->constrained()->cascadeOnDelete();
            $table->decimal('note_matier', 3, 2);
            $table->decimal('note_X_coef', 5, 2);
            $table->enum("cycle", ["s1", "s2", "fin"]);
            $table->date("annee_scolaire");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('note_maiers');
    }
};
