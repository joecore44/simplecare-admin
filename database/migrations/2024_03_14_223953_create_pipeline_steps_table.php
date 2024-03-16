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
        Schema::create('pipeline_steps', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('pipeline_id');
            $table->foreign('pipeline_id')
                   ->references('id')
                   ->on('pipelines')
                   ->onDelete('cascade');
            $table->integer('order');
            $table->string('name');
            $table->string('description');
            $table->uuid('next_step_id')->nullable();
            $table->foreign('next_step_id')
                   ->references('id')
                   ->on('pipeline_steps')
                   ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pipeline_steps');
    }
};
