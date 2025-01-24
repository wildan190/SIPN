<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{

    // Menampilkan daftar gallery
    public function index()
    {
        $galleries = Gallery::all(); // Mengambil semua data gallery
        return view('admin.galleries.index', compact('galleries'));
    }

    // Menampilkan form untuk membuat gallery baru
    public function create()
    {
        return view('admin.galleries.create');
    }

    // Menyimpan data gallery baru
    public function store(Request $request)
    {
        // Validasi form
        $request->validate([
            'headline' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'picture_upload' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
        ]);

        // Membuat instance model Gallery
        $gallery = new Gallery();

        // Menyimpan data lainnya
        $gallery->headline = $request->input('headline');
        $gallery->description = $request->input('description');
        $gallery->date = $request->input('date');

        // Menyimpan gambar jika ada file yang diupload
        if ($request->hasFile('picture_upload')) {
            // Jika ada gambar lama, hapus gambar lama dari storage
            if ($gallery->picture_upload && Storage::disk('public')->exists($gallery->picture_upload)) {
                Storage::disk('public')->delete($gallery->picture_upload);
            }

            // Simpan gambar baru ke folder gallery_images
            $path = $request->file('picture_upload')->store('gallery_images', 'public');

            // Simpan path gambar ke database
            $gallery->picture_upload = $path;
        }

        // Simpan gallery ke database
        $gallery->save();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.galleries.index')->with('success', 'Gallery created successfully.');
    }



    // Menampilkan detail gallery
    public function show(Gallery $gallery)
    {
        return view('admin.galleries.show', compact('gallery'));
    }

    // Menampilkan form untuk mengedit gallery
    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'));
    }

    // Memperbarui data gallery
    public function update(Request $request, Gallery $gallery)
    {
        // Validasi form
        $request->validate([
            'headline' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'picture_upload' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
        ]);

        // Update data lainnya
        $gallery->headline = $request->input('headline');
        $gallery->description = $request->input('description');
        $gallery->date = $request->input('date');

        // Menyimpan gambar baru jika ada file yang diupload
        if ($request->hasFile('picture_upload')) {
            // Hapus gambar lama jika ada
            if ($gallery->picture_upload && Storage::disk('public')->exists($gallery->picture_upload)) {
                Storage::disk('public')->delete($gallery->picture_upload);
            }

            // Simpan gambar baru
            $path = $request->file('picture_upload')->store('gallery_images', 'public');

            // Simpan path gambar ke database
            $gallery->picture_upload = $path;
        }

        // Simpan perubahan ke database
        $gallery->save();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.galleries.index')->with('success', 'Gallery updated successfully.');
    }

    // Menghapus gallery
    public function destroy(Gallery $gallery)
    {
        // Hapus gambar jika ada
        if ($gallery->picture_upload) {
            Storage::disk('public')->delete($gallery->picture_upload);
        }

        // Hapus gallery dari database
        $gallery->delete();

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery deleted successfully.');
    }
}
