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
            $table->string("nom_entreprise")->nullable();
            $table->string("email")->nullable();
            $table->string("tlf")->nullable();
            $table->text("text_about_us")->nullable();
            $table->string("img");
            $table->string("lien_fb")->nullable();
            $table->string("lien_insta")->nullable();
            $table->text("adresse")->nullable();
            $table->text("localisation")->nullable();
            $table->string("logo")->nullable();
           
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
