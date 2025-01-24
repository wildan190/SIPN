<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">

                    <!-- Dashboard Stats -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- User Count -->
                        <div class="bg-green-100 dark:bg-green-600 p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-medium text-gray-800 dark:text-gray-200">Total Users</h3>
                            <p class="text-2xl font-semibold text-gray-700 dark:text-gray-100">{{ $userCount }}</p>
                        </div>

                        <!-- Draft Posts Count -->
                        <div class="bg-yellow-100 dark:bg-yellow-600 p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-medium text-gray-800 dark:text-gray-200">Draft Posts</h3>
                            <p class="text-2xl font-semibold text-gray-700 dark:text-gray-100">{{ $draftPostsCount }}
                            </p>
                        </div>

                        <!-- Published Posts Count -->
                        <div class="bg-blue-100 dark:bg-blue-600 p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-medium text-gray-800 dark:text-gray-200">Published Posts</h3>
                            <p class="text-2xl font-semibold text-gray-700 dark:text-gray-100">
                                {{ $publishedPostsCount }}</p>
                        </div>

                        <!-- Event Count -->
                        <div class="bg-red-100 dark:bg-red-600 p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-medium text-gray-800 dark:text-gray-200">Total Events</h3>
                            <p class="text-2xl font-semibold text-gray-700 dark:text-gray-100">{{ $eventCount }}</p>
                        </div>
                    </div>

                    <!-- Upcoming Events -->
                    <div class="mt-8">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Upcoming Events (Next 7 Days)
                        </h3>
                        @if ($upcomingEvents->isEmpty())
                            <p class="text-gray-500 dark:text-gray-400">No events found in the next 7 days.</p>
                        @else
                            <ul class="mt-4 space-y-4">
                                @foreach ($upcomingEvents as $event)
                                    <li class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md">
                                        <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                                            {{ $event->event_name }}</h4>
                                        <p class="text-gray-600 dark:text-gray-400">
                                            {{ \Carbon\Carbon::parse($event->date)->format('d F Y') }}</p>
                                        <p class="text-gray-600 dark:text-gray-400">
                                            {{ \Carbon\Carbon::parse($event->time)->format('H:i') }}</p>
                                        <p class="text-gray-600 dark:text-gray-400">{{ $event->location }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
