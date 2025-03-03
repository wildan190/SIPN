<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'published')
            ->latest()
            ->take(3)
            ->get();

        $upcomingEvents = Event::where('date', '>', now())
            ->where('date', '<', now()->addDays(7))
            ->orderBy('date', 'asc')
            ->take(3)
            ->get();

        $galleries = Gallery::latest()->take(3)->get();

        $alumni = Alumni::latest()->take(5)->get();

        return view('frontend.index', compact('posts', 'upcomingEvents', 'galleries', 'alumni'));
    }
}
