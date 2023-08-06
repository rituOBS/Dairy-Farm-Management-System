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
        Schema::create('milk_lists', function (Blueprint $table) {
            $table->id();
            $table ->string('quality',length:120);
            $table->text('Description')->nullable();
            $table ->string('quantity')->nullable();
            $table->double('price',10,2)->default(0,0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('milk_lists');
    }
};
