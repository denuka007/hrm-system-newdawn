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
            $table->string('name')->nullable();
            $table->string('empId')->nullable();
            $table->string('address')->nullable();
            $table->string('nic')->nullable();
            $table->string('age')->nullable();
            $table->string('civil')->nullable();
            $table->string('gender')->nullable();
            $table->string('mobile')->nullable();
            $table->string('position')->nullable();
            $table->string('propic')->nullable();
            $table->string('workstatus')->nullable();
            $table->string('qualification')->nullable();
            $table->string('worktype')->nullable();
            $table->string('emname')->nullable();
            $table->string('emcontact')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
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
