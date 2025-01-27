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
        Schema::create('posts', function (Blueprint $table) {
            $table->uuid('id')->primary();  // Gunakan UUID untuk id
            $table->string('headline');      // Judul atau headline dari post
            $table->uuid('category_id');    // ID kategori (relasi ke kategori menggunakan UUID)
            $table->text('content');        // Konten post
            $table->string('slug')->unique();  // Slug untuk URL
            $table->enum('status', ['draft', 'published'])->default('draft');  // Status post (draft atau published)
            $table->string('picture_upload')->nullable();  // Upload gambar (optional)
            $table->timestamps();

            // Menambahkan foreign key untuk kategori
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
