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
        Schema::table('admins', function (Blueprint $table) {
            $table->string("email", 150);
        });
        Schema::table('doctors', function (Blueprint $table) {
            $table->string("email", 150);
        });
        Schema::table('practitioners', function (Blueprint $table) {
            $table->string("email", 150);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->dropColumn("email");
        });
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropColumn("email");
        });
        Schema::table('practitioners', function (Blueprint $table) {
            $table->dropColumn("email");
        });
    }
};
