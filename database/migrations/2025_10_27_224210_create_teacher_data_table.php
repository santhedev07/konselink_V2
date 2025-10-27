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
        Schema::create('teacher_data', function (Blueprint $table) {
            $table->id();
            $table->string('name')->isNotEmpty();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('teacher_id')->unique()->isNotEmpty();
            $table->foreignId('class_id')->constrained('data_classes')->onDelete('cascade')->nullable();
            $table->string('email')->unique()->isNotEmpty();
            $table->string('phone', 15)->unique()->nullable();
            $table->string('address', 150)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_data');
    }
};
