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
        Schema::create('borrow_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('created_by')->nullable(true)->default(null);
            $table->unsignedBigInteger('updated_by')->nullable(true)->default(null);
            $table->unsignedBigInteger('requested_by')->nullable(false);
            $table->string('assets')->nullable(false);
            $table->unsignedTinyInteger('approval_level')->nullable(false)->default(1);
            $table->boolean('is_enabled')->nullable(false)->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrow_logs');
    }
};
