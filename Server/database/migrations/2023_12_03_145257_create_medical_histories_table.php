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
        Schema::create('medical_histories', function (Blueprint $table) {
            $table->id();
            $table->string('symptom_type', 200);
            $table->string('symptom_value', 350);

            $table->foreignId('visit_id')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('medical_histories', function (Blueprint $table) {
            $table->dropForeign(['visit_id']);
        });

        Schema::dropIfExists('medical_histories');
    }
};
