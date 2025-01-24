<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Event Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">

                    <!-- Event Headline (Larger and Bolder Font Size) -->
                    <div class="mb-4">
                        <h3 class="text-4xl font-bold text-gray-800 dark:text-gray-200 leading-tight">
                            {{ $event->headline }}
                        </h3>
                    </div>

                    @if ($event->picture_upload)
                        <div class="mb-4">
                            <img src="{{ asset('storage/' . $event->picture_upload) }}" alt="Event Image"
                                class="w-full h-50 object-contain rounded-lg shadow-lg">
                        </div>
                    @endif

                    <!-- Event Date and Time -->
                    <div class="mb-4">
                        <strong class="text-gray-700 dark:text-gray-300">Date & Time:</strong>
                        <span class="text-gray-800 dark:text-gray-200">
                            {{ $event->date->format('l, j F Y') }} at {{ $event->time }}

                        </span>
                    </div>

                    <!-- Event Location -->
                    <div class="mb-4">
                        <strong class="text-gray-700 dark:text-gray-300">Location:</strong>
                        <span class="text-gray-800 dark:text-gray-200">{{ $event->location }}</span>
                    </div>

                    <!-- Event Description -->
                    <div class="mb-4 text-lg text-gray-600 dark:text-gray-400">
                        <p>{{ $event->event_description }}</p>
                    </div>

                    <!-- Back Button -->
                    <div class="mt-6">
                        <a href="{{ route('admin.events.index') }}"
                            class="inline-block bg-blue-500 dark:bg-blue-600 text-white font-medium px-6 py-3 rounded-lg hover:bg-blue-600 dark:hover:bg-blue-700">
                            <i class="fas fa-arrow-left"></i> Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
