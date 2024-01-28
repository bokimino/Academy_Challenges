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
        Schema::table('players', function (Blueprint $table) {
            $table->dropForeign(['team_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('players', function (Blueprint $table) {
        $table->foreign('team_id')->references('id')->on('teams');
    });
}
};
