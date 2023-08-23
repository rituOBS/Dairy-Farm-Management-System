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
        Schema::create('feed_schedules', function (Blueprint $table) {
            $table->id();
            $table ->string('animal',length:120);
            $table ->string('during',length:120);
            $table ->string('grass',length:120);
            $table ->string('fooder',length:120);
            $table ->string('meal',length:120);
            $table ->string('straw',length:120);
            $table ->string('mixture',length:120);
            $table ->string('bran',length:120);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feed_schedules');
    }
};
