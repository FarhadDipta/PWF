<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- Header -->
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <h2 class="text-2xl font-bold">Product List</h2>
                            <p class="text-sm text-gray-400">Manage your product inventory</p>
                        </div>

                        <a href="{{ route('product.create') }}"
                           class="inline-flex items-center gap-2 px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg shadow">
                            Add Product
                        </a>
                    </div>

                    <!-- Flash Message -->
                    @if (session('success'))
                        <div class="mb-4 p-3 bg-green-500 text-white rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm text-left">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3">Name</th>
                                    <th class="px-6 py-3">Quantity</th>
                                    <th class="px-6 py-3">Price</th>
                                    <th class="px-6 py-3">User</th>
                                    <th class="px-6 py-3 text-center">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($products as $product)
                                    <tr class="border-b">
                                        <td class="px-6 py-4">{{ $product->name }}</td>

                                        <td class="px-6 py-4">
                                            {{ $product->qty }}
                                        </td>

                                        <td class="px-6 py-4">
                                            Rp {{ number_format($product->price, 0, ',', '.') }}
                                        </td>

                                        <td class="px-6 py-4">
                                            {{ $product->user->name ?? '-' }}
                                        </td>

                                        <td class="px-6 py-4 text-center">
                                            <a href="{{ route('product.show', $product->id) }}"
                                               class="text-blue-500">View</a>

                                            <a href="{{ route('product.edit', $product->id) }}"
                                               class="text-yellow-500 mx-2">Edit</a>

                                            <form action="{{ route('product.delete', $product->id) }}"
                                                  method="POST"
                                                  style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    onclick="return confirm('Delete this product?')"
                                                    class="text-red-500">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-4">
                                            No products found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>