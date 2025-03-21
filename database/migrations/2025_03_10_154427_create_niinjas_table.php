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
        Schema::create('niinjas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('skill');
            $table->string('email')->unique();
            $table->timestamps();
            $table->foreignId('dojo_id')->constrainted()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('niinjas');
    }
};