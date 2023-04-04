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
        Schema::create('saleries', function (Blueprint $table) {
            $table->id();
            $table->string('empId');
            $table->string('month');
            $table->double('present');
            $table->double('leave');
            $table->double('short');
            $table->double('absant');
            $table->double('othours');
            $table->double('normalhours');
            $table->double('advance');
            $table->double('basic');
            $table->double('normalsal');
            $table->double('otsal');
            $table->double('absal');
            $table->double('epf');
            $table->double('newyear')->nullable();
            $table->double('chrismas')->nullable();
            $table->double('allcome')->nullable();
            $table->double('finalsal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saleries');
    }
};
