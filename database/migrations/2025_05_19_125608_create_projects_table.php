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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText("projectName")->default("");
            $table->dateTime("start")->default(now());
            $table->dateTime("end")->default(now()->addDay());
            $table->longText("shortDesc")->default("");
            $table->longText("thumbnailImage")->default("");
            $table->longText("link")->default("")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
