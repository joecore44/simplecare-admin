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
        Schema::table('accounts', function (Blueprint $table) {
            $table->enum('practice_size', ['solo', 'group', 'startup'])->default('startup');
            $table->enum('practice_type', ['mental health', 'diet nutrition', 'hormone replacement', 'substance use'])->default('hormone replacement');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('accounts', function (Blueprint $table) {
            $table->dropColumn('practice_size');
            $table->dropColumn('practice_type');
        });
    }
};
