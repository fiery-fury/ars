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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('created_by')->nullable(true)->default(null);
            $table->unsignedBigInteger('updated_by')->nullable(true)->default(null);
            $table->unsignedBigInteger('user_level_id')->nullable(false)->default(1);
            $table->unsignedBigInteger('department_id')->nullable(false);
            $table->string('first_name')->nullable(false);
            $table->string('middle_name')->nullable(true);
            $table->string('last_name')->nullable(false);
            $table->boolean('is_enabled')->nullable(false)->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
