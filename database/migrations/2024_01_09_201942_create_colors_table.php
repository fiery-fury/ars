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
        Schema::create('colors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('created_by')->nullable(true)->default(null);
            $table->unsignedBigInteger('updated_by')->nullable(true)->default(null);
            $table->string('code', 4)->unique()->nullable(false);
            $table->string('name')->unique()->nullable(false);
            $table->string('description')->nullable(true);
            $table->boolean('is_enabled')->nullable(false)->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colors');
    }
};
