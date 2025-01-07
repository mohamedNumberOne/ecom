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
        Schema::create('sizes', function (Blueprint $table) {
            $table->id();
            $table->string("nom_mesure");
            // $table->string("S");
            // $table->string("M");
            // $table->string("L");
            // $table->string("XL");
            // $table->string("XXL");
            // $table->string("XXXL");
            // $table->string("35");
            // $table->string("36");
            // $table->string("37");
            // $table->string("38");
            // $table->string("39");
            // $table->string("40");
            // $table->string("41");
            // $table->string("42");
            // $table->string("43");
            // $table->string("44");
            // $table->string("45");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sizes');
    }
};
