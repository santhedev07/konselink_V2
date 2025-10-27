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
        Schema::create('school_data', function (Blueprint $table) {
            $table->id();
            $table->string('school_name')->isNotEmpty();
            $table->string('school_id')->isNotEmpty();
            $table->string('email')->isNotEmpty();
            $table->string('phone', 16)->isNotEmpty();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_data');
    }
};
