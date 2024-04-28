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
        Schema::create('controles', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Eleve::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Matier::class)->constrained()->cascadeOnDelete();
            $table->string("nom_controle", 20)->nullable();
            $table->enum("cycle", ["s1", "s2", "fin"]);
            $table->unsignedTinyInteger("num_controle")->nullable();
            $table->unsignedTinyInteger("coef_controle");
            $table->decimal('note_controle', 3, 2);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('controles');
    }
};
