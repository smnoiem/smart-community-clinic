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
        Schema::create('visits', function (Blueprint $table) {

            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->string('patient_name', 100);
            $table->integer('age');
            $table->string('address', 200);
            $table->string('nid', 200);
            $table->string('status', 50);
            $table->boolean('need_follow_up');
            $table->boolean('need_ambulance');
            $table->boolean('need_transfer');

            $table->foreignId("clinic_id")->constrained();
            $table->foreignId("practitioner_id")->constrained();

            $table->unsignedBigInteger("parent_visit_id");
            $table->foreign("parent_visit_id")->references("id")->on("visits");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('visits', function (Blueprint $table) {
            $table->dropForeign(['clinic_id']);
            $table->dropForeign(['practitioner_id']);
            $table->dropForeign(['parent_visit_id']);
        });

        Schema::dropIfExists('visits');
    }
};
