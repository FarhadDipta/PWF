<x-app-layout>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- Header -->
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h2 class="text-2xl font-bold">Category List</h2>
                            <p class="text-sm text-gray-400">Manage your categories</p>
                        </div>

                        <a href="{{ route('category.create') }}"
                           class="px-4 py-2 bg-indigo-600 text-white rounded-lg">
                            + Add Category
                        </a>
                    </div>

                    <!-- Table -->
                    <table class="min-w-full text-sm">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-left">Name</th>
                                <th class="px-4 py-2 text-left">Total Product</th>
                                <th class="px-4 py-2 text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($categories as $category)
                                <tr class="border-b">
                                    <td class="px-4 py-2">{{ $category->name }}</td>
                                    <td class="px-4 py-2">{{ $category->products_count }}</td>

                                    <td class="px-4 py-2 text-center">
                                        <a href="{{ route('category.edit', $category->id) }}"
                                           class="text-yellow-500 mr-2">
                                            Edit
                                        </a>

                                        <form action="{{ route('category.destroy', $category->id) }}"
                                              method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')

                                            <button onclick="return confirm('Delete this category?')"
                                                class="text-red-500">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center py-4">
                                        No category found
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>