<div class="flex items-center gap-3">

    <!-- EDIT -->
    @can('update', $product)
        <a href="{{ $editUrl }}"
           class="inline-flex items-center gap-2 px-4 py-2 border border-yellow-500 text-yellow-500 rounded-lg hover:bg-yellow-500 hover:text-white transition">
            Edit
        </a>
    @endcan

    <!-- DELETE -->
    @can('delete', $product)
        <form action="{{ $deleteUrl }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit"
                onclick="return confirm('Yakin ingin menghapus data ini?')"
                class="inline-flex items-center gap-2 px-4 py-2 border border-red-500 text-red-500 rounded-lg hover:bg-red-500 hover:text-white transition">
                Delete
            </button>
        </form>
    @endcan

</div>