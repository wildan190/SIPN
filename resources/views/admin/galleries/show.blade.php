<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Gallery Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-6">
                    {{ __('Gallery Information') }}
                </h3>

                <!-- Gallery Information -->
                <div class="mb-6">
                    <h4 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                        {{ $gallery->headline }}
                    </h4>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        <strong>{{ __('Description:') }}</strong> {{ $gallery->description }}
                    </p>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        <strong>{{ __('Date:') }}</strong>
                        {{ \Carbon\Carbon::parse($gallery->date)->format('d F Y') }}
                    </p>
                </div>

                <!-- Gallery Image -->
                <div class="mb-6">
                    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">{{ __('Image Preview') }}
                    </h4>
                    @if ($gallery->picture_upload && Storage::disk('public')->exists($gallery->picture_upload))
                        <img src="{{ Storage::url($gallery->picture_upload) }}" alt="Gallery Image"
                            class="w-full h-auto rounded-md shadow-lg">
                    @else
                        <p class="text-red-500 text-sm">{{ __('No image available') }}</p>
                    @endif
                </div>

                <!-- Actions -->
                <div class="flex items-center justify-between">
                    <a href="{{ route('admin.galleries.index') }}"
                        class="inline-block bg-gray-500 dark:bg-gray-600 text-white px-4 py-2 rounded-md shadow-md hover:bg-gray-600 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                        {{ __('Back to Gallery List') }}
                    </a>
                    <a href="{{ route('admin.galleries.edit', $gallery) }}"
                        class="inline-block bg-blue-500 dark:bg-blue-600 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                        {{ __('Edit Gallery') }}
                    </a>
                    <form action="{{ route('admin.galleries.destroy', $gallery) }}" method="POST"
                        style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="inline-block bg-red-500 dark:bg-red-600 text-white px-4 py-2 rounded-md shadow-md hover:bg-red-600 dark:hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 dark:focus:ring-offset-gray-800"
                            onclick="return confirm('Are you sure you want to delete this gallery?')">
                            {{ __('Delete Gallery') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
