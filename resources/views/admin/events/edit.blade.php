<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-6">
                    {{ __('Edit Event') }}
                </h3>

                <!-- Form -->
                <form action="{{ route('admin.events.update', $event) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Headline -->
                    <div class="mb-4">
                        <label for="headline" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            {{ __('Headline') }}
                        </label>
                        <input type="text" id="headline" name="headline" style="border-color: #ccc; padding: 10px;"
                            value="{{ old('headline', $event->headline) }}" placeholder="Event Headline"
                            class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 
                               text-gray-800 dark:text-gray-200 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 
                               dark:focus:ring-green-700">
                        @error('headline')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Event Name -->
                    <div class="mb-4">
                        <label for="event_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            {{ __('Event Name') }}
                        </label>
                        <input type="text" id="event_name" name="event_name" style="border-color: #ccc; padding: 10px;"
                            value="{{ old('event_name', $event->event_name) }}" placeholder="Event Name"
                            class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 
                               text-gray-800 dark:text-gray-200 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 
                               dark:focus:ring-green-700">
                        @error('event_name')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Location -->
                    <div class="mb-4">
                        <label for="location" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            {{ __('Location') }}
                        </label>
                        <input type="text" id="location" name="location" style="border-color: #ccc; padding: 10px;"
                            value="{{ old('location', $event->location) }}" placeholder="Event Location"
                            class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 
                               text-gray-800 dark:text-gray-200 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 
                               dark:focus:ring-green-700">
                        @error('location')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Date -->
                    <div class="mb-4">
                        <label for="date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            {{ __('Date') }}
                        </label>
                        <input type="date" id="date" name="date" style="border-color: #ccc; padding: 10px;"
                            value="{{ old('date', is_string($event->date) ? $event->date : $event->date->format('Y-m-d')) }}"
                            class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 
           text-gray-800 dark:text-gray-200 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 
           dark:focus:ring-green-700">
                        @error('date')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>


                    <!-- Time -->
                    <div class="mb-4">
                        <label for="time" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            {{ __('Time') }}
                        </label>
                        <input type="time" id="time" name="time" value="{{ old('time', $event->time) }}"
                        style="border-color: #ccc; padding: 10px;"
                            class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 
                               text-gray-800 dark:text-gray-200 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 
                               dark:focus:ring-green-700">
                        @error('time')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Event Description -->
                    <div class="mb-4">
                        <label for="event_description"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            {{ __('Event Description') }}
                        </label>
                        <textarea id="event_description" name="event_description" rows="4" style="border-color: #ccc; padding: 10px;"
                            class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 
                                  text-gray-800 dark:text-gray-200 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 
                                  dark:focus:ring-green-700">{{ old('event_description', $event->event_description) }}</textarea>
                        @error('event_description')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Picture Upload (Optional) -->
                    <div class="mb-4">
                        <label for="picture_upload" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            {{ __('Upload Event Picture (Optional)') }}
                        </label>
                        <input type="file" id="picture_upload" name="picture_upload" style="border-color: #ccc; padding: 10px;"
                            class="mt-1 block w-full text-gray-700 dark:text-gray-300 dark:bg-gray-700 border-gray-300 dark:border-gray-600 focus:ring-green-500 focus:border-green-500">
                        @if ($event->picture_upload)
                            <div class="mt-2">
                                <img src="{{ Storage::url($event->picture_upload) }}" alt="Event Image"
                                    class="w-32 h-32 object-cover rounded-md">
                                <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">Current Image</p>
                            </div>
                        @endif
                        @error('picture_upload')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="flex items-center justify-between">
                        <a href="{{ route('admin.events.index') }}"
                            class="inline-block bg-gray-500 dark:bg-gray-600 text-white px-4 py-2 rounded-md shadow-md 
                           hover:bg-gray-600 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-400 
                           focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                            {{ __('Cancel') }}
                        </a>
                        <button type="submit"
                            class="bg-blue-500 dark:bg-blue-600 text-white px-4 py-2 rounded-md shadow-md 
                                hover:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 
                                focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                            {{ __('Update Event') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
