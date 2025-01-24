<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Alumni Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-green-100 dark:bg-green-800 rounded-lg shadow-lg overflow-hidden">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">

                    <!-- Alumni Information (Card-like layout) -->
                    <div class="flex items-center mb-6 p-6 bg-green-500 dark:bg-green-600 rounded-lg shadow-lg">
                        <div class="w-32 h-32 overflow-hidden rounded-full bg-white shadow-lg">
                            <!-- Display alumni picture if available -->
                            @if ($alumni->picture_upload)
                                <img src="{{ Storage::url($alumni->picture_upload) }}" alt="Alumni Picture"
                                    class="w-full h-full object-cover">
                            @else
                                <img src="https://via.placeholder.com/128" alt="No Picture"
                                    class="w-full h-full object-cover">
                            @endif
                        </div>
                        <div class="ml-6 text-white">
                            <p class="text-2xl font-bold">{{ $alumni->name }}</p>
                            <p class="text-xl">{{ $alumni->almamater }}</p>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">Contact Information</h3>
                        <div class="space-y-4 text-gray-800 dark:text-gray-400">
                            <p><strong class="text-green-600">Phone:</strong> {{ $alumni->phone }}</p>
                            <p><strong class="text-green-600">Email:</strong> {{ $alumni->email }}</p>
                        </div>
                    </div>

                    <!-- Address Information -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">Address</h3>
                        <div class="space-y-4 text-gray-800 dark:text-gray-400">
                            <p><strong class="text-green-600">Address:</strong> {{ $alumni->address }}</p>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-6 flex items-center justify-between">
                        <a href="{{ route('admin.alumni.edit', $alumni) }}"
                            class="inline-block bg-green-600 text-white font-medium px-6 py-3 rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                            Edit Alumni
                        </a>
                        <a href="{{ route('admin.alumni.index') }}"
                            class="inline-block bg-gray-500 text-white font-medium px-6 py-3 rounded-lg shadow-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                            Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
