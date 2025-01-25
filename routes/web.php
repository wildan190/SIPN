<?php

use App\Http\Controllers\Admin\AlumniController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/send-message', [ContactController::class, 'send'])->name('send.message');

// Route::get('/', function () {
//     return view('welcome');
// });

// Grup rute dengan middleware untuk autentikasi
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Rute kategori
    Route::prefix('admin')->name('admin.')->group(function () {
        // Rute kategori
        Route::get('categories', [CategoryController::class, 'index'])->name('categories.index'); // Menampilkan semua kategori
        Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create'); // Form untuk kategori baru
        Route::post('categories', [CategoryController::class, 'store'])->name('categories.store'); // Menyimpan kategori baru
        Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show'); // Menampilkan kategori tertentu
        Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit'); // Form edit kategori
        Route::put('categories/{category}', [CategoryController::class, 'update'])->name('categories.update'); // Memperbarui kategori
        Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy'); // Menghapus kategori
    });

    // Grup rute untuk Post
    Route::prefix('admin')->name('admin.')->group(function () {
        // Rute untuk Post
        Route::get('posts', [PostController::class, 'index'])->name('posts.index'); // Menampilkan semua post
        Route::get('posts/create', [PostController::class, 'create'])->name('posts.create'); // Form untuk post baru
        Route::post('posts', [PostController::class, 'store'])->name('posts.store'); // Menyimpan post baru

        // Rute edit dan update menggunakan UUID
        Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit'); // Form edit post
        Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update'); // Memperbarui post
        Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy'); // Menghapus post
        Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show'); // Menampilkan post tertentu
    });

    // Grup rute untuk Event
    Route::prefix('admin')->name('admin.')->group(function () {
        // Rute untuk Event
        Route::get('events', [EventController::class, 'index'])->name('events.index'); // Menampilkan semua event
        Route::get('events/create', [EventController::class, 'create'])->name('events.create'); // Form untuk event baru
        Route::post('events', [EventController::class, 'store'])->name('events.store'); // Menyimpan event baru

        // Rute edit dan update menggunakan UUID untuk Event
        Route::get('events/{event}/edit', [EventController::class, 'edit'])->name('events.edit'); // Form edit event
        Route::put('events/{event}', [EventController::class, 'update'])->name('events.update'); // Memperbarui event
        Route::delete('events/{event}', [EventController::class, 'destroy'])->name('events.destroy'); // Menghapus event
        Route::get('events/{event}', [EventController::class, 'show'])->name('events.show'); // Menampilkan event tertentu
    });

    // Grup rute untuk Gallery
    Route::prefix('admin')->name('admin.')->group(function () {
        // Rute untuk Gallery
        Route::get('galleries', [GalleryController::class, 'index'])->name('galleries.index'); // Menampilkan semua gallery
        Route::get('galleries/create', [GalleryController::class, 'create'])->name('galleries.create'); // Form untuk gallery baru
        Route::post('galleries', [GalleryController::class, 'store'])->name('galleries.store'); // Menyimpan gallery baru

        // Rute edit dan update menggunakan UUID untuk Gallery
        Route::get('galleries/{gallery}/edit', [GalleryController::class, 'edit'])->name('galleries.edit'); // Form edit gallery
        Route::put('galleries/{gallery}', [GalleryController::class, 'update'])->name('galleries.update'); // Memperbarui gallery
        Route::delete('galleries/{gallery}', [GalleryController::class, 'destroy'])->name('galleries.destroy'); // Menghapus gallery
        Route::get('galleries/{gallery}', [GalleryController::class, 'show'])->name('galleries.show'); // Menampilkan gallery tertentu
    });

    // Grup rute untuk Alumni
    Route::prefix('admin')->name('admin.')->group(function () {
        // Rute untuk Alumni
        Route::get('alumni', [AlumniController::class, 'index'])->name('alumni.index'); // Menampilkan semua alumni
        Route::get('alumni/create', [AlumniController::class, 'create'])->name('alumni.create'); // Form untuk alumni baru
        Route::post('alumni', [AlumniController::class, 'store'])->name('alumni.store'); // Menyimpan alumni baru

        // Rute edit dan update alumni
        Route::get('alumni/{alumni}/edit', [AlumniController::class, 'edit'])->name('alumni.edit'); // Form edit alumni
        Route::put('alumni/{alumni}', [AlumniController::class, 'update'])->name('alumni.update'); // Memperbarui alumni
        Route::delete('alumni/{alumni}', [AlumniController::class, 'destroy'])->name('alumni.destroy'); // Menghapus alumni
        Route::get('alumni/{alumni}', [AlumniController::class, 'show'])->name('alumni.show'); // Menampilkan alumni tertentu
    });
});
