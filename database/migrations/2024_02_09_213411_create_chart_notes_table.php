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
        Schema::create('chart_notes', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('client_id');
            $table->uuid('account_id');
            $table->text('note');
            $table->date('date');
            $table->time('time');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chart_notes');
    }
};
