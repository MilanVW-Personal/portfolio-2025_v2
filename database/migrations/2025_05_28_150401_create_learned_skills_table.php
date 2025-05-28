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
        Schema::create('learned_skills', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text("hobbyNaam")->default("");
            $table->longText("hobbyDesc")->default("");
            $table->longText("icon")->default("");
            $table->text("class")->default("");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('learned_skills');
    }
};
