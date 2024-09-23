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
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('bio');
            $table->string('about');
            $table->string('university');
            $table->enum('scientific_degree',['BSc','phd','master','diploma']);
            $table->string('major')->nullable();
            $table->date('start');
            $table->date('end');
            $table->string('experience');
            $table->string('scientific_grade');
            $table->string('skills');
            $table->string('linkedin')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_employee');
    }
};
