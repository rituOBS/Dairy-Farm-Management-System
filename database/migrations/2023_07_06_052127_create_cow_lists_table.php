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
        Schema::create('cow_lists', function (Blueprint $table) {
            $table->id();
            $table ->string('name',length:120);
            $table->text('Description')->nullable();
            $table->double('price')->default(0);
            $table->text('color')->nullable();
            $table ->double('weight');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cow_lists');
    }
};
