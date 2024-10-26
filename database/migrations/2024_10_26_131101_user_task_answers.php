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
        Schema::create('user_task_answers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('main_subject_id');
            $table->integer('secondary_subject_id')->nullable();
            $table->integer('topic_id');
            $table->integer('task_id');
            $table->mediumText('body');
            $table->integer('user_score')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_task_answers');
    }
};
