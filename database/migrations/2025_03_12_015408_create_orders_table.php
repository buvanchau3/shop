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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('desc');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('status');
            $table->string('recever');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.s
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
