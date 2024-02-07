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
        Schema::create('patient_medications', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name');
            $table->string('size');
            $table->string('strength');
            $table->float('price');
            $table->text('notes');
            $table->text('instructions');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_rx')->default(true);
            $table->string('explainer_id');
            $table->text('webste_description');
            $table->json('related_items');
            $table->integer('position');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_medications');
    }
};
