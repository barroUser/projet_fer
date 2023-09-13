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
        Schema::table('admin', function (Blueprint $table) {
            $table->bigInteger('id_superadmin')->unsigned();
            // Définition de la clé étrangère id_superadmins dans la table administrateur
            $table->foreign('id_superadmin')->references('id')->on('super_admins')->onDelete('cascade');

            $table->bigInteger('id_peage')->unsigned();
            // // Définition de la clé étrangère id_peage dans la table administrateur
            $table->foreign('id_peage')->references('id')->on('peages');

            Schema::enableForeignKeyConstraints(); 

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('admin', function (Blueprint $table) {
            //
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['id_superadmin']);
            $table->dropForeign(['id_peage']);
        });
    }
};
