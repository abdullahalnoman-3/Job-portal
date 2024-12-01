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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->foreignId('job_type_id')->constrained()->onDelete('cascade');
            $table->foreignId('job_role_id')->constrained()->onDelete('cascade');
            $table->string('job_tags')->nullable();
            $table->foreignId('job_function_id')->constrained()->onDelete('cascade');
            $table->decimal('min_salary', 10, 2);
            $table->decimal('max_salary', 10, 2);
            $table->string('remark')->nullable();
            $table->integer('vacancies')->default(1);
            $table->foreignId('work_mode_id')->constrained()->onDelete('cascade');
            $table->foreignId('experience_level_id')->constrained()->onDelete('cascade');
            $table->foreignId('country_id')->constrained()->onDelete('cascade');
            $table->foreignId('city_id')->constrained()->onDelete('cascade');
            $table->text('description')->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('contact_email');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
