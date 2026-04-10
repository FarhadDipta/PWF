<x-app-layout>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- Header -->
                    <div class="flex items-center gap-3 mb-6">
                        <a href="{{ route('product.index') }}"
                           class="p-1.5 rounded-md text-gray-400 hover:text-gray-600">
                            ←
                        </a>

                        <div>
                            <h2 class="text-2xl font-bold">Add Product</h2>
                            <p class="text-sm text-gray-400">Fill in the details to add a new product</p>
                        </div>
                    </div>

                    <!-- Form -->
                    <form action="{{ route('product.store') }}" method="POST" class="space-y-5">
                        @csrf

                        <!-- Name -->
                        <div>
                            <label class="block text-sm font-medium mb-1">
                                Product Name *
                            </label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="w-full px-4 py-2 rounded-lg border"
                                placeholder="e.g. Wireless Headphones">
                            @error('name')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Quantity & Price -->
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium mb-1">
                                    Quantity *
                                </label>
                                <input type="number" name="qty" value="{{ old('qty') }}"
                                    class="w-full px-4 py-2 rounded-lg border">
                                @error('qty')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-1">
                                    Price *
                                </label>
                                <input type="number" name="price" value="{{ old('price') }}"
                                    class="w-full px-4 py-2 rounded-lg border">
                                @error('price')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- User -->
                        <div>
                            <label class="block text-sm font-medium mb-1">
                                Owner *
                            </label>
                            <select name="user_id" class="w-full px-4 py-2 rounded-lg border">
                                <option value="">Select Owner</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}"
                                        {{ old('user_id') == $user->id ? 'selected' : '' }}>
                                        {{ $user->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('user_id')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Buttons -->
                        <div class="flex justify-end gap-3">
                            <a href="{{ route('product.index') }}"
                               class="px-4 py-2 border rounded-lg">
                                Cancel
                            </a>

                            <button type="submit"
                                class="px-4 py-2 bg-indigo-600 text-white rounded-lg">
                                Save Product
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>