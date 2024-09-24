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
        Schema::create('job', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employer_id')->nullable()->constrained('employer')->cascadeOnDelete();
            $table->string('title');
            $table->string('description');
            $table->string('required_skills');
            $table->string('company_location');
            $table->enum('work_location',['onsite','remote','hybrid']);
            $table->enum('job_type',['part-time','full-time']);
            $table->enum('experience-level',['entry level','mid-level','junior','senior']);
            $table->bigInteger('salary');
            $table->date('date_posted');
            $table->enum('status',['open','closed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_job');
    }
};
