<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    // Menampilkan daftar event
    public function index()
    {
        $events = Event::all(); // Ambil semua data event
        return view('admin.events.index', compact('events'));
    }

    // Menampilkan form untuk membuat event baru
    public function create()
    {
        // Jika ada kategori, Anda dapat memanggilnya di sini jika diperlukan
        return view('admin.events.create');
    }

    // Menyimpan event baru
    public function store(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'headline' => 'required|string|max:255',
            'event_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'event_description' => 'required|string',
            'picture_upload' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload gambar jika ada
        if ($request->hasFile('picture_upload')) {
            $filePath = $request->file('picture_upload')->store('events', 'public');
        }

        // Membuat event baru
        $event = Event::create([
            'headline' => $request->headline,
            'event_name' => $request->event_name,
            'location' => $request->location,
            'date' => $request->date,
            'time' => $request->time,
            'event_description' => $request->event_description,
            'picture_upload' => $filePath ?? null,
        ]);

        return redirect()->route('admin.events.index')->with('success', 'Event berhasil dibuat!');
    }

    // Menampilkan form untuk mengedit event
    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    // Memperbarui event yang ada
    public function update(Request $request, Event $event)
    {
        // Validasi inputan
        $request->validate([
            'headline' => 'required|string|max:255',
            'event_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'event_description' => 'required|string',
            'picture_upload' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Jika ada file gambar baru
        if ($request->hasFile('picture_upload')) {
            // Hapus gambar lama jika ada
            if ($event->picture_upload) {
                Storage::disk('public')->delete($event->picture_upload);
            }

            // Upload gambar baru
            $filePath = $request->file('picture_upload')->store('events', 'public');
        }

        // Update event
        $event->update([
            'headline' => $request->headline,
            'event_name' => $request->event_name,
            'location' => $request->location,
            'date' => $request->date,
            'time' => $request->time,
            'event_description' => $request->event_description,
            'picture_upload' => $filePath ?? $event->picture_upload,
        ]);

        return redirect()->route('admin.events.index')->with('success', 'Event berhasil diperbarui!');
    }

    // Menampilkan detail event
    public function show(Event $event)
    {
        return view('admin.events.show', compact('event'));
    }

    // Menghapus event
    public function destroy(Event $event)
    {
        // Hapus gambar event jika ada
        if ($event->picture_upload) {
            Storage::disk('public')->delete($event->picture_upload);
        }

        // Hapus event dari database
        $event->delete();

        return redirect()->route('admin.events.index')->with('success', 'Event berhasil dihapus!');
    }
}
