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
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('telephone');
            $table->string('email')->unique();
            $table->string('password');
            // $table->bigInteger('id_superadmin')->unsigned();
            // Définition de la clé étrangère id_superadmins dans la table administrateur
            // $table->foreign('id_superadmin')->references('id')->on('super_admins');
            // $table->bigInteger('id_peage')->unsigned();
            // Définition de la clé étrangère id_peage dans la table administrateur
            // $table->foreign('id_peage')->references('id')->on('peages');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
