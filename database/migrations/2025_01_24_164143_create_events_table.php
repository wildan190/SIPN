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
            $table->uuid('id')->primary(); // UUID sebagai primary key
            $table->string('headline');
            $table->string('event_name');
            $table->string('location');
            $table->date('date');  // Tanggal event
            $table->time('time');  // Waktu event
            $table->text('event_description');
            $table->string('picture_upload')->nullable();  // Gambar event, nullable jika tidak ada gambar
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
