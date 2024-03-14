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
        Schema::create('answers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('order');
            $table->enum('type', ['text', 'textarea', 'number', 'date', 'select', 'multiselect', 'radio', 'checkbox']);
            $table->string('label');
            $table->text('value')->nullable();
            $table->boolean('value_boolean')->nullable();
            $table->integer('value_number')->nullable();
            $table->uuid('question_id');
            $table->foreign('question_id')
                   ->references('id')
                   ->on('questions')
                   ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
