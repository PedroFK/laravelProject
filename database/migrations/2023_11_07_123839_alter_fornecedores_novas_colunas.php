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
        Schema::table('fornecedors', function (Blueprint $table) {
            $table->string('uf', 2);
            $table->string('email', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fornecedors', function (Blueprint $table) {
            // Removert colunas
            // $table->dropColumn('uf');
            // $table->dropColumn('email');
            $table->dropColumn(['uf', 'email']);
        });
    }
};
