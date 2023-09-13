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
        Schema::table('agents', function (Blueprint $table) {
            //
            $table->bigInteger('id_superadmin')->unsigned();
            // Définition de la clé étrangère id_peage dans la table administrateur
            $table->foreign('id_superadmin')->references('id')->on('super_admins')->onDelete('cascade');;

            $table->bigInteger('id_lot')->unsigned();
            // Définition de la clé étrangère id_peage dans la table administrateur
            $table->foreign('id_lot')->references('id')->on('lot')->onDelete('cascade');

            Schema::enableForeignKeyConstraints(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('agents', function (Blueprint $table) {
            //
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['id_superadmin']);
            $table->dropForeign(['id_lot']);
        });
    }
};
