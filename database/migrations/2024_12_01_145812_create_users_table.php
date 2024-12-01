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
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('mobile')->nullable();
            $table->enum('role', ['admin', 'employer', 'user']);
            $table->string('profile_picture')->nullable();
            $table->string('otp')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_website')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
