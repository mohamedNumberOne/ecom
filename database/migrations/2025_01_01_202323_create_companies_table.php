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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string("nom_entreprise");
            $table->string("email");
            $table->string("tlf");
            $table->text("text_about_us");
            $table->string("img");
            $table->string("lien_fb");
            $table->string("lien_insta");
            $table->text("adresse");
            $table->text("localisation");
            $table->string("logo");
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
