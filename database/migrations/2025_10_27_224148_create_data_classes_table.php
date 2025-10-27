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
        Schema::create('data_classes', function (Blueprint $table) {
            $table->id();
            $table->string('grade')->isNotEmpty();
            $table->string('major')->nullable();
            $table->string('class')->nullable();
            $table->foreignId('yearAc_id')->constrained('year_academics')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_classes');
    }
};
