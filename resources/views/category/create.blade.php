<x-app-layout>
    <div class="py-12">
        <div class="max-w-2xl mx-auto">
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h2 class="text-xl font-bold mb-4">Add Category</h2>

                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label class="block mb-1">Category Name</label>
                            <input type="text" name="name"
                                class="w-full px-4 py-2 border rounded-lg 
                                       bg-white text-black 
                                       dark:bg-gray-700 dark:text-white">

                            @error('name')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex justify-end gap-3">
                            <a href="{{ route('category.index') }}"
                               class="px-4 py-2 border rounded-lg">
                                Cancel
                            </a>

                            <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg">
                                Save
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>