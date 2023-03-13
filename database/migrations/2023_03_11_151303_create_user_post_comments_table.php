<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('user_post_comments', function (Blueprint $table) {
            $table->id();
            $table->integer('event_post_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->text('comment')->nullable();
            $table->integer('parent_comment_id')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_post_comments');
    }

};
