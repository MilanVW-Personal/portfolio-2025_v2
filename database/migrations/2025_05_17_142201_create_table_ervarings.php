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
        Schema::create('ervarings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime("start")->default(now());
            $table->dateTime("end")->default(now()->addDay())->nullable();
            $table->text("ervaringNaam")->default("");
            $table->text("ervaringDesc")->default("");
            $table->text("ervaringAdresGoogleMaps")->default("")->nullable();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ervarings');
    }
};
