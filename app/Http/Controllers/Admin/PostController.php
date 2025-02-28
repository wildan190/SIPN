<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;  // Import Storage facade

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all(); // Ambil semua kategori

        return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'headline' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'content' => 'required|string',
            'slug' => 'required|string|unique:posts,slug',
            'status' => 'required|in:published,draft',
            'picture_upload' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('picture_upload')) {
            $path = $request->file('picture_upload')->store('posts', 'public'); // Simpan ke storage/public/posts
            $validated['picture_upload'] = $path; // Simpan path ke database
        }

        // Create the post
        Post::create($validated);

        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully.');
    }

    public function edit(Post $post)
    {
        $categories = Category::all(); // Ambil semua kategori

        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'headline' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'content' => 'required|string',
            'slug' => 'required|string|unique:posts,slug,'.$post->id,
            'status' => 'required|in:published,draft',
            'picture_upload' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('picture_upload')) {

            if ($post->picture_upload && Storage::disk('public')->exists($post->picture_upload)) {
                Storage::disk('public')->delete($post->picture_upload);
            }

            $path = $request->file('picture_upload')->store('posts', 'public');
            $validated['picture_upload'] = $path;
        }

        $post->update($validated);

        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully.');
    }

    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    public function destroy(Post $post)
    {
        if ($post->picture_upload) {
            Storage::delete('public/'.$post->picture_upload);  // Menggunakan Storage facade
        }

        $post->delete();

        return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully!');
    }
}
