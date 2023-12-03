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
        Schema::create('tickets', function (Blueprint $table) {

            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->id();
            $table->string('title', 100);
            $table->string('status', 200);

            $table->foreignId("visit_id")->constrained();
            $table->foreignId("practitioner_id")->constrained();
            $table->foreignId("doctor_id")->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->dropForeign(['visit_id']);
            $table->dropForeign(['practitioner_id']);
            $table->dropForeign(['doctor_id']);
        });

        Schema::dropIfExists('tickets');
    }
};
