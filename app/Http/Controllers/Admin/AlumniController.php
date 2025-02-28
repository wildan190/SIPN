<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlumniController extends Controller
{
    /**
     * Menampilkan daftar alumni.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $alumni = Alumni::all();

        return view('admin.alumni.index', compact('alumni'));
    }

    /**
     * Menampilkan form untuk membuat alumni baru.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.alumni.create');
    }

    /**
     * Menyimpan alumni baru ke database.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|unique:alumni,email',
            'address' => 'required|string',
            'almamater' => 'required|string|max:255',
            'picture_upload' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('picture_upload')) {
            $validated['picture_upload'] = $request->file('picture_upload')->store('alumni_images', 'public');
        }

        Alumni::create($validated);

        return redirect()->route('admin.alumni.index')->with('success', 'Alumni created successfully.');
    }

    /**
     * Menampilkan detail alumni.
     *
     * @return \Illuminate\View\View
     */
    public function show(Alumni $alumni)
    {
        return view('admin.alumni.show', compact('alumni'));
    }

    /**
     * Menampilkan form untuk mengedit alumni.
     *
     * @return \Illuminate\View\View
     */
    public function edit(Alumni $alumni)
    {
        return view('admin.alumni.edit', compact('alumni'));
    }

    /**
     * Memperbarui alumni yang ada.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Alumni $alumni)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|unique:alumni,email,' . $alumni->id,
            'address' => 'nullable|string',
            'almamater' => 'required|string|max:255',
            'picture_upload' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('picture_upload')) {
            if ($alumni->picture_upload && Storage::disk('public')->exists($alumni->picture_upload)) {
                Storage::disk('public')->delete($alumni->picture_upload);
            }

            $validated['picture_upload'] = $request->file('picture_upload')->store('alumni_images', 'public');
        }

        $alumni->update($validated);

        return redirect()->route('admin.alumni.index')->with('success', 'Alumni updated successfully.');
    }

    /**
     * Menghapus alumni dari database.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Alumni $alumni)
    {
        if ($alumni->picture_upload && Storage::disk('public')->exists($alumni->picture_upload)) {
            Storage::disk('public')->delete($alumni->picture_upload);
        }

        $alumni->delete();

        return redirect()->route('admin.alumni.index')->with('success', 'Alumni deleted successfully.');
    }
}
