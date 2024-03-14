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
        Schema::create('pipelines', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('account_id');
            $table->foreign('account_id')
                   ->references('id')
                   ->on('accounts')
                   ->onDelete('cascade');
            $table->string('name');
            $table->uuid('product_id')->nullable();
            $table->string('pipeline_photo_path', 2048)->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->enum('type', ['sales', 'marketing', 'support'])->default('sales');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pipelines');
    }
};
