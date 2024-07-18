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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('account_type')->default('CareSeeker');
            $table->string('picture_url')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('address')->nullable();
            $table->string('job_skills')->nullable();
            $table->string('hourly_rate')->nullable();
            $table->longText('experience')->nullable();
            $table->string('reference1_name')->nullable();
            $table->string('reference1_contact')->nullable();
            $table->longText('reference1_info')->nullable();
            $table->string('reference2_name')->nullable();
            $table->string('reference2_contact')->nullable();
            $table->longText('reference2_info')->nullable();
            $table->rememberToken();
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
