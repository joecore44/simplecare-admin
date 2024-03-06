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
        Schema::create('clients', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('account_id');
            $table->foreign('account_id')
                  ->references('id')
                  ->on('accounts')
                  ->onDelete('cascade');
            $table->boolean('is_active')->default(false);
            $table->boolean('is_onboarded')->default(false);
            $table->enum('type', ['adult', 'child', 'couple'])->default('adult');
            $table->string('first_name');
            $table->string('last_name');
            $table->uuid('contact_one_id')->nullable();
            $table->uuid('contact_two_id')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
