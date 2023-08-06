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
        Schema::create('feed_lists', function (Blueprint $table) {
            $table->id();
            $table ->string('name',length:120);
            $table->text('Description')->nullable();
            $table->text('item')->nullable();
            $table ->double('daily_consumption')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feed_lists');
    }
};
