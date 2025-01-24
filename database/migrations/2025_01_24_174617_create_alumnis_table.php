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
        Schema::create('alumni', function (Blueprint $table) {
            $table->uuid('id')->primary(); // Menggunakan UUID sebagai primary key
            $table->string('name'); // Kolom untuk nama alumni
            $table->string('phone'); // Kolom untuk nomor telepon alumni
            $table->string('email')->unique(); // Kolom untuk email alumni, harus unik
            $table->text('address')->nullable(); // Kolom untuk alamat alumni, bisa null
            $table->string('almamater'); // Kolom untuk almamater alumni
            $table->string('picture_upload')->nullable(); // Kolom untuk path gambar alumni, bisa null
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnis');
    }
};
