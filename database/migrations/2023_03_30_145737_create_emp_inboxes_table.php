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
        Schema::create('emp_inboxes', function (Blueprint $table) {
            $table->id();
            $table->string('empId');
            $table->string('msg');
            $table->integer('type')->default(0); //0=primary 1=danger 2=success 3=warning
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emp_inboxes');
    }
};
