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
        Schema::table('clinics', function (Blueprint $table) {
            $table->unsignedBigInteger("hospital_id")->nullable()->change();
        });
        Schema::table('doctors', function (Blueprint $table) {
            $table->unsignedBigInteger("hospital_id")->nullable()->change();
        });
        Schema::table('medical_histories', function (Blueprint $table) {
            $table->unsignedBigInteger("visit_id")->nullable()->change();
        });
        Schema::table('practitioners', function (Blueprint $table) {
            $table->unsignedBigInteger("hospital_id")->nullable()->change();
            $table->unsignedBigInteger("clinic_id")->nullable()->change();
        });
        Schema::table('tickets', function (Blueprint $table) {
            $table->unsignedBigInteger("doctor_id")->nullable()->change();
        });
        Schema::table('visits', function (Blueprint $table) {
            $table->string('address', 200)->nullable()->change();
            $table->string('nid', 200)->nullable()->change();
            $table->string('status', 50)->nullable()->change();
            $table->boolean('need_follow_up')->default(false)->change();
            $table->boolean('need_ambulance')->default(false)->change();
            $table->boolean('need_transfer')->default(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clinics', function (Blueprint $table) {
            $table->unsignedBigInteger("hospital_id")->change();
        });
        Schema::table('doctors', function (Blueprint $table) {
            $table->unsignedBigInteger("hospital_id")->change();
        });
        Schema::table('medical_histories', function (Blueprint $table) {
            $table->unsignedBigInteger("visit_id")->change();
        });
        Schema::table('practitioners', function (Blueprint $table) {
            $table->unsignedBigInteger("hospital_id")->change();
            $table->unsignedBigInteger("clinic_id")->change();
        });
        Schema::table('tickets', function (Blueprint $table) {
            $table->unsignedBigInteger("doctor_id")->change();
        });
        Schema::table('visits', function (Blueprint $table) {
            $table->string('address', 200)->change();
            $table->string('nid', 200)->change();
            $table->string('status', 50)->change();
            $table->boolean('need_follow_up')->change();
            $table->boolean('need_ambulance')->change();
            $table->boolean('need_transfer')->change();
        });
    }
};
