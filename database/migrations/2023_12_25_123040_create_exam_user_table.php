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
        Schema::create('exam_user', function (Blueprint $table) {
            $table->id();
            $table->float('score');
            $table->smallInteger('time_mins');
            $table->enum('status',['open','closed']);
            $table->foreignId('user_id')->constrained()
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('exam_id')->constrained()
            ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_user');
    }
};
