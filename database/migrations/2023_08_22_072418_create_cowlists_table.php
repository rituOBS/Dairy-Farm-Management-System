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
        Schema::create('cowlists', function (Blueprint $table) {
            $table->id();
            $table ->string('name',length:120);
            $table->foreignId('shade_id')->constrained('cow_shades')->cascadeOnDelete();
            $table ->string('weight',length:120);
            $table ->string('color',length:120);
            $table ->string('price',length:120);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cowlists');
    }
};
