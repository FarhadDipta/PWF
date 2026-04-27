<x-app-layout>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- Header -->
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center gap-3">
                            <a href="{{ route('product.index') }}"
                               class="p-1.5 rounded-md text-gray-400 hover:text-gray-600">
                                ←
                            </a>

                            <div>
                                <h2 class="text-2xl font-bold">Product Detail</h2>
                                <p class="text-sm text-gray-400">
                                    Viewing product <span class="font-semibold">{{ $product->name }}</span>
                                </p>
                            </div>
                        </div>

                        <x-action-detail 
                            :product="$product"
                            editUrl="{{ route('product.edit', $product->id) }}"
                            deleteUrl="{{ route('product.delete', $product->id) }}"
                        />
                    </div>

                    <!-- Detail -->
                    <div class="border rounded-lg divide-y">

                        <!-- Name -->
                        <div class="flex justify-between px-4 py-3">
                            <span class="text-gray-500">Product Name</span>
                            <span class="font-semibold">{{ $product->name }}</span>
                        </div>

                        <!-- Quantity -->
                        <div class="flex justify-between px-4 py-3">
                            <span class="text-gray-500">Quantity</span>
                            <span>
                                {{ $product->qty }}
                                ({{ $product->qty > 10 ? 'In Stock' : 'Low Stock' }})
                            </span>
                        </div>

                        <!-- Price -->
                        <div class="flex justify-between px-4 py-3">
                            <span class="text-gray-500">Price</span>
                            <span class="font-semibold">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </span>
                        </div>

                        <!-- Owner -->
                        <div class="flex justify-between px-4 py-3">
                            <span class="text-gray-500">Owner</span>
                            <span>{{ $product->user->name ?? '-' }}</span>
                        </div>

                        <!-- Created -->
                        <div class="flex justify-between px-4 py-3">
                            <span class="text-gray-500">Created At</span>
                            <span>{{ $product->created_at->format('d M Y H:i') }}</span>
                        </div>

                        <!-- Updated -->
                        <div class="flex justify-between px-4 py-3">
                            <span class="text-gray-500">Updated At</span>
                            <span>{{ $product->updated_at->format('d M Y H:i') }}</span>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>