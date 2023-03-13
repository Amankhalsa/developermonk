<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{

    public function up(): void
    {
        Schema::create('multiple_pics', function (Blueprint $table) 
        {
            $table->id();
            $table->string('event_id')->nullable();
            $table->string('multipic')->nullable();
            $table->integer('order')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {

        Schema::dropIfExists('multiple_pics');

    }

};
