<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create New Gallery') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-6">
                    {{ __('Add a New Gallery') }}
                </h3>

                <!-- Form -->
                <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Headline -->
                    <div class="mb-4">
                        <label for="headline" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            {{ __('Headline') }}
                        </label>
                        <input type="text" id="headline" name="headline" value="{{ old('headline') }}"
                            placeholder="Gallery Headline"
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
                        <textarea id="description" name="description" rows="4"
                            class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 
                                  text-gray-800 dark:text-gray-200 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 
                                  dark:focus:ring-green-700">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Date -->
                    <div class="mb-4">
                        <label for="date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            {{ __('Date') }}
                        </label>
                        <input type="date" id="date" name="date" value="{{ old('date') }}"
                            class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 
                               text-gray-800 dark:text-gray-200 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 
                               dark:focus:ring-green-700">
                        @error('date')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Picture Upload -->
                    <div class="mb-4">
                        <label for="picture_upload" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            {{ __('Upload Gallery Picture') }}
                        </label>
                        <input type="file" id="picture_upload" name="picture_upload"
                            class="mt-1 block w-full text-gray-700 dark:text-gray-300 dark:bg-gray-700 border-gray-300 dark:border-gray-600 focus:ring-green-500 focus:border-green-500">
                        @error('picture_upload')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

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
                            {{ __('Save Gallery') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
