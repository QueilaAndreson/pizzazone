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
        Schema::create('users_cart', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('veg_id')->nullable();
            $table->string('nonveg_id')->nullable();
            $table->string('starter_id')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_cart');
    }
};
