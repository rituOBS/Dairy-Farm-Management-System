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
        Schema::create('cow_shades', function (Blueprint $table) {
            $table->id();
            $table ->string('name',length:120);
            $table ->string('space',length:120);
            $table ->string('width',length:120);
            $table ->string('passage',length:120);
            $table ->string('alley',length:120);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cow_shades');
    }
};
