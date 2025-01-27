<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Gallery') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-6">
                    {{ __('Edit Gallery') }}
                </h3>

                <!-- Form -->
                <form action="{{ route('admin.galleries.update', $gallery) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Headline -->
                    <div class="mb-4">
                        <label for="headline" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            {{ __('Headline') }}
                        </label>
                        <input type="text" id="headline" name="headline" style="border-color: #ccc; padding: 10px;"
                            value="{{ old('headline', $gallery->headline) }}" placeholder="Gallery Headline"
                            class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 
                               text-gray-800 dark:text-gray-200 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 
                               dark:focus:ring-green-700">
                        @error('headline')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            {{ __('Description') }}
                        </label>
                        <textarea id="description" name="description" rows="4" style="border-color: #ccc; padding: 10px;"
                            class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 
                                  text-gray-800 dark:text-gray-200 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 
                                  dark:focus:ring-green-700">{{ old('description', $gallery->description) }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Date -->
                    <div class="mb-4">
                        <label for="date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            {{ __('Date') }}
                        </label>
                        <input type="date" id="date" name="date" style="border-color: #ccc; padding: 10px;"
                            value="{{ old('date', $gallery->date->format('Y-m-d')) }}"
                            class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 
                               text-gray-800 dark:text-gray-200 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 
                               dark:focus:ring-green-700">
                        @error('date')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Picture Upload (Optional) -->
                    <div class="mb-4">
                        <label for="picture_upload" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            {{ __('Upload New Gallery Picture (Optional)') }}
                        </label>
                        <input type="file" id="picture_upload" name="picture_upload" style="border-color: #ccc; padding: 10px;"
                            class="mt-1 block w-full text-gray-700 dark:text-gray-300 dark:bg-gray-700 border-gray-300 dark:border-gray-600 focus:ring-green-500 focus:border-green-500">
                        @error('picture_upload')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Existing Picture Display -->
                    @if ($gallery->picture_upload)
                        <div class="mb-4">
                            <p class="text-sm text-gray-700 dark:text-gray-300">
                                {{ __('Current Picture') }}:
                            </p>
                            <img src="{{ asset('storage/' . $gallery->picture_upload) }}" alt="Current Gallery Image"
                                class="w-32 h-32 object-cover mt-2">
                        </div>
                    @endif

                    <!-- Submit Button -->
                    <div class="flex items-center justify-between">
                        <a href="{{ route('admin.galleries.index') }}"
                            class="inline-block bg-gray-500 dark:bg-gray-600 text-white px-4 py-2 rounded-md shadow-md 
                           hover:bg-gray-600 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-400 
                           focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                            {{ __('Cancel') }}
                        </a>
                        <button type="submit"
                            class="bg-green-500 dark:bg-green-600 text-white px-4 py-2 rounded-md shadow-md 
                                hover:bg-green-600 dark:hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 
                                focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                            {{ __('Update Gallery') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
