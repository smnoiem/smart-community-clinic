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
        Schema::create('ticket_threads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sender_id');
            $table->string('sender_type', 150);
            $table->text('message');
            $table->string('attachment', 350);

            $table->foreignId('ticket_id')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ticket_threads', function (Blueprint $table) {
            $table->dropForeign(['ticket_id']);
        });

        Schema::dropIfExists('ticket_threads');
    }
};
