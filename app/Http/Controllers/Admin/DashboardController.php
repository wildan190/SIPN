<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Models\Event;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil jumlah user
        $userCount = User::count();

        // Mengambil jumlah post dengan status draft dan published
        $draftPostsCount = Post::where('status', 'draft')->count();
        $publishedPostsCount = Post::where('status', 'published')->count();

        // Mengambil jumlah event
        $eventCount = Event::count();

        // Mengambil daftar event dalam 7 hari kedepan
        $upcomingEvents = Event::where('date', '>', Carbon::now())
            ->where('date', '<', Carbon::now()->addDays(7))
            ->orderBy('date', 'asc')
            ->get();

        // Menampilkan dashboard dengan data yang telah diambil
        return view('dashboard', compact(
            'userCount',
            'draftPostsCount',
            'publishedPostsCount',
            'eventCount',
            'upcomingEvents'
        ));
    }
}
