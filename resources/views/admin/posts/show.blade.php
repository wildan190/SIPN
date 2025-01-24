<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">

                    <!-- Post Headline (Larger and Bolder Font Size) -->
                    <div class="mb-4">
                        <h3 class="text-4xl font-bold text-gray-800 dark:text-gray-200 leading-tight">
                            {{ $post->headline }}
                        </h3>
                    </div>

                    @if ($post->picture_upload)
                        <div class="mb-4">
                            <img src="{{ asset('storage/' . $post->picture_upload) }}" alt="Post Image"
                                class="w-full h-50 object-contain rounded-lg shadow-lg">
                        </div>
                    @endif

                    <!-- Post Created At -->
                    <div class="mb-4">
                        <strong class="text-gray-700 dark:text-gray-300">Rangkasbitung,</strong>
                        <span class="text-gray-800 dark:text-gray-200">
                            {{ $post->created_at->format('l, j F Y') }} <!-- Format: Day, Month Date Year -->
                        </span>
                    </div>

                    <!-- Post Content -->
                    <div class="mb-4 text-lg text-gray-600 dark:text-gray-400">
                        <p>{{ $post->content }}</p>
                    </div>

                    <!-- Post Category -->
                    <div class="mb-4">
                        <strong class="text-gray-700 dark:text-gray-300">Category:</strong>
                        <span class="text-gray-800 dark:text-gray-200">{{ $post->category->name }}</span>
                    </div>

                    <!-- Post Status -->
                    <div class="mb-4">
                        <strong class="text-gray-700 dark:text-gray-300">Status:</strong>
                        <span class="text-gray-800 dark:text-gray-200">{{ ucfirst($post->status) }}</span>
                    </div>

                    <!-- Back Button -->
                    <div class="mt-6">
                        <a href="{{ route('admin.posts.index') }}"
                            class="inline-block bg-blue-500 dark:bg-blue-600 text-white font-medium px-6 py-3 rounded-lg hover:bg-blue-600 dark:hover:bg-blue-700">
                            <i class="fas fa-arrow-left"></i> Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
