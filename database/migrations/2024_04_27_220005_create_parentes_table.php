<?php

use App\Models\Eleve;
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
        Schema::create('parentes', function (Blueprint $table) {
            $table->id();
            $table->string("cin", 10)->unique();
            $table->string("prenom", 20);
            $table->string("nom", 20);
            $table->string("photo")->nullable();
            $table->string("photo_cin_face1")->nullable();
            $table->string("photo_cin_face2")->nullable();
            $table->string("phone_number", 20)->nullable();
            $table->string("email")->nullable();
            $table->string("location")->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parentes');
    }
};
