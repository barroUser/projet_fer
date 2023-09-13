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
        Schema::table('coupons', function (Blueprint $table) {
            //
            $table->bigInteger('id_agent')->unsigned();
            $table->foreign('id_agent')->references('id')->on('agents')->onDelete('cascade');

            $table->bigInteger('id_peage_depart')->unsigned();
            $table->foreign('id_peage_depart')->references('id')->on('peages')->onDelete('cascade');

            $table->bigInteger('id_peage_arrivee')->unsigned();
            $table->foreign('id_peage_arrivee')->references('id')->on('peages')->onDelete('cascade');

            
            $table->bigInteger('id_trajet')->unsigned();
            $table->foreign('id_trajet')->references('id')->on('trajets')->onDelete('cascade');

            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('coupons', function (Blueprint $table) {
            //
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['id_agent']);
            $table->dropForeign(['id_peage_depart']);
            $table->dropForeign(['id_peage_arrivee']);
            $table->dropForeign(['id_trajet']);
        });
    }
};
