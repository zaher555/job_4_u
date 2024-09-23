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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('username')->unique();
            $table->string('profile_img')->unique();
            $table->foreignId('employer_id')->nullable()->constrained('employer')->cascadeOnDelete();
            $table->foreignId('employee_id')->nullable()->constrained('employee')->cascadeOnDelete();
            $table->foreignId('admin_id')->nullable()->constrained('admin')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_users');
    }
};
