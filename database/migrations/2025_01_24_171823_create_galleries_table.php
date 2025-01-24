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
        Schema::create('galleries', function (Blueprint $table) {
            $table->uuid('id')->primary(); // Menambahkan UUID sebagai primary key
            $table->string('headline'); // Kolom untuk headline
            $table->text('description'); // Kolom untuk deskripsi
            $table->date('date'); // Kolom untuk tanggal
            $table->string('picture_upload')->nullable(); // Kolom untuk gambar, bisa null jika tidak ada gambar
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
