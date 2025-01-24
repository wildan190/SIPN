<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">

                    <!-- Form Title -->
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-6">
                        {{ __('Edit Post') }}
                    </h3>

                    <!-- Form -->
                    <form action="{{ route('admin.posts.update', $post->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Headline -->
                        <div class="mb-4">
                            <label for="headline" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Headline
                            </label>
                            <input type="text" name="headline" id="headline"
                                class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:ring-indigo-500 focus:border-indigo-500"
                                value="{{ old('headline', $post->headline) }}" placeholder="Masukan Headline" required>
                            @error('headline')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Category -->
                        <div class="mb-4">
                            <label for="category_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Category
                            </label>
                            <select name="category_id" id="category_id"
                                class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:ring-indigo-500 focus:border-indigo-500">
                                <option value="">{{ __('Select a category') }}</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Content -->
                        <div class="mb-4">
                            <label for="content" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Content
                            </label>
                            <textarea name="content" id="content" rows="6"
                                class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:ring-indigo-500 focus:border-indigo-500"
                                required>{{ old('content', $post->content) }}</textarea>
                            @error('content')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Slug -->
                        <div class="mb-4">
                            <label for="slug" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Slug
                            </label>
                            <input type="text" name="slug" id="slug"
                                class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:ring-indigo-500 focus:border-indigo-500"
                                value="{{ old('slug', $post->slug) }}" required>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">The slug will be used in the post
                                URL.</p>
                            @error('slug')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Picture Upload -->
                        <div class="mb-4">
                            <label for="picture" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Upload Picture
                            </label>
                            <input type="file" name="picture_upload" id="picture"
                                class="mt-1 block w-full text-gray-700 dark:text-gray-300 dark:bg-gray-700 border-gray-300 dark:border-gray-600 focus:ring-indigo-500 focus:border-indigo-500">
                            @error('picture')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Status -->
                        <div class="mb-4">
                            <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Status
                            </label>
                            <select name="status" id="status"
                                class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:ring-indigo-500 focus:border-indigo-500">
                                <option value="draft" {{ old('status', $post->status) == 'draft' ? 'selected' : '' }}>
                                    Draft
                                </option>
                                <option value="published"
                                    {{ old('status', $post->status) == 'published' ? 'selected' : '' }}>
                                    Published
                                </option>
                            </select>
                            @error('status')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Submit and Cancel Buttons -->
                        <div class="flex justify-between">
                            <div>
                                <a href="{{ route('admin.posts.index') }}"
                                    class="bg-gray-500 text-white px-6 py-2 rounded-md shadow-md hover:bg-gray-600 focus:outline-none">
                                    Cancel
                                </a>
                            </div>
                            <div>
                                <button type="submit"
                                    class="bg-blue-500 text-white px-6 py-2 rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
