<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">

                    <!-- Title and Button Row -->
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                            {{ __('Post List') }}
                        </h3>
                        <a href="{{ route('admin.posts.create') }}"
                            class="inline-block bg-green-500 dark:bg-green-600 text-white font-medium px-4 py-2 rounded-md shadow-md hover:bg-green-600 dark:hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                            Add New Post
                        </a>
                    </div>

                    <!-- Table -->
                    <table class="table-auto w-full mt-6 text-gray-800 dark:text-gray-200">
                        <thead>
                            <tr class="bg-gray-100 dark:bg-gray-700">
                                <th class="px-4 py-2">No.</th>
                                <th class="px-4 py-2">Headline</th>
                                <th class="px-4 py-2">Category</th>
                                <th class="px-4 py-2">Status</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($posts as $post)
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-2">{{ $post->headline }}</td>
                                    <td class="px-4 py-2">{{ $post->category->name ?? 'N/A' }}</td>
                                    <td class="px-4 py-2">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $post->status === 'published' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                            {{ ucfirst($post->status) }}
                                        </span>
                                    </td>
                                    <td class="px-4 py-2">
                                        <a href="{{ route('admin.posts.show', $post) }}"
                                            class="text-green-500 dark:text-green-400 hover:underline">
                                            View
                                        </a>
                                        <a href="{{ route('admin.posts.edit', $post) }}"
                                            class="text-blue-500 dark:text-blue-400 hover:underline">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST"
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
                                    <td colspan="5" class="text-center px-4 py-2">No posts found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
