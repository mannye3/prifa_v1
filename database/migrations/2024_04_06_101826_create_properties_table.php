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
        Schema::create('properties', function (Blueprint $table) {
            $table->uuid('id')->unique();
            $table->string('agent_id');
            $table->string('title');
            $table->string('description');
            $table->string('category');
            $table->string('bedrooms')->nullable();
            $table->string('bathrooms')->nullable();
            $table->float('price');
            $table->string('address');
            $table->string('state');
            $table->string('neighbourhood')->nullable();
            $table->string('country')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('media');
            $table->boolean('is_promoted')->default(false);
            $table->date('promotion_expire_at')->nullable();
            $table->enum('status', ['pending', 'published', 'unavaliable'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
