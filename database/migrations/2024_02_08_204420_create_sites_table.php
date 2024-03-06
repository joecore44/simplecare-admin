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
        Schema::create('sites', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('account_id');
            $table->foreign('account_id')
                   ->references('id')
                   ->on('accounts')
                   ->onDelete('cascade');
            $table->boolean('is_published')->default(false);
            // Api information
            $table->string('login_email');
            $table->string('login_password');
            $table->string('site_name')->nullable();
            $table->string('site_url')->nullable();
            // Business Information
            $table->string('site_logo')->nullable();
            $table->string('site_favicon')->nullable();
            $table->string('site_email')->nullable();
            $table->string('site_phone')->nullable();
            $table->string('site_address')->nullable();
            // Social Media
            $table->string('site_facebook')->nullable();
            $table->string('site_twitter')->nullable();
            $table->string('site_instagram')->nullable();
            $table->string('site_linkedin')->nullable();
            $table->string('site_pinterest')->nullable();
            $table->string('site_youtube')->nullable();
            $table->string('site_vimeo')->nullable();
            $table->string('site_snapchat')->nullable();
            $table->string('site_reddit')->nullable();
            $table->string('site_tiktok')->nullable();
            $table->string('site_yelp')->nullable();
            $table->string('site_tripadvisor')->nullable();
            $table->string('site_foursquare')->nullable();
            $table->string('site_google_maps')->nullable();

            // SEO Information
            $table->string('site_title')->nullable();
            $table->text('site_description')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sites');
    }
};
