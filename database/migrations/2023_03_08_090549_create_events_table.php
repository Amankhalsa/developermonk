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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->integer('event_cat_id')->nullable();
            $table->string('club_name')->nullable();
            $table->longText('event_discription')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('venue')->nullable();
            $table->longText('crowd')->nullable();

            $table->text('address')->nullable();
            $table->text('location')->nullable();
            $table->string('event_thambnail')->nullable();
            $table->string('event_multi')->nullable();
            $table->string('ad_service_img')->nullable();
            $table->string('min_age')->nullable();
            $table->string('featured')->nullable();
            $table->string('check_in')->nullable();
            $table->string('check_out')->nullable();
            $table->longText('sp_note')->nullable();
            $table->longText('ad_service_dis')->nullable();
            $table->longText('map')->nullable();
            $table->integer('order')->nullable();
            $table->integer('status')->default(1);
            $table->SoftDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
