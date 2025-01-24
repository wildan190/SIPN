<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">

                    <!-- Title and Button Row -->
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                            {{ __('Event List') }}
                        </h3>
                        <a href="{{ route('admin.events.create') }}"
                            class="inline-block bg-green-500 dark:bg-green-600 text-white font-medium px-4 py-2 rounded-md shadow-md hover:bg-green-600 dark:hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                            Add New Event
                        </a>
                    </div>

                    <!-- Table -->
                    <table class="table-auto w-full mt-6 text-gray-800 dark:text-gray-200">
                        <thead>
                            <tr class="bg-gray-100 dark:bg-gray-700">
                                <th class="px-4 py-2">No.</th>
                                <th class="px-4 py-2">Event Name</th>
                                <th class="px-4 py-2">Location</th>
                                <th class="px-4 py-2">Date</th>
                                <th class="px-4 py-2">Time</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($events as $event)
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-2">{{ $event->event_name }}</td>
                                    <td class="px-4 py-2">{{ $event->location }}</td>
                                    <td class="px-4 py-2">{{ \Carbon\Carbon::parse($event->date)->format('d F Y') }}
                                    </td>
                                    <td class="px-4 py-2">{{ \Carbon\Carbon::parse($event->time)->format('H:i') }}</td>
                                    <td class="px-4 py-2">
                                        <a href="{{ route('admin.events.show', $event) }}"
                                            class="text-green-500 dark:text-green-400 hover:underline">
                                            View
                                        </a>
                                        <a href="{{ route('admin.events.edit', $event) }}"
                                            class="text-blue-500 dark:text-blue-400 hover:underline">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.events.destroy', $event) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-red-500 dark:text-red-400 hover:underline"
                                                onclick="return confirm('Are you sure?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center px-4 py-2">No events found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
