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
        Schema::create('holstein_cow_genders', function (Blueprint $table) {
            $table->id();
            $table ->string('name',length:120);
            $table ->double('weight');
            $table ->string('gender',length:120);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('holstein_cow_genders');
    }
};
