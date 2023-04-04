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
        Schema::create('basic_advance_rates', function (Blueprint $table) {
            $table->id();
            $table->string('rateid');
            $table->string('posid');
            $table->string('position');
            $table->string('basic');
            $table->string('advancelimit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basic_advance_rates');
    }
};
