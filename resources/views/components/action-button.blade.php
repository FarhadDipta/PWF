@can('update', $product)
    <a href="{{ $editUrl }}"
       class="text-yellow-500 hover:text-yellow-600 text-sm">
        Edit
    </a>
@endcan

@can('delete', $product)
    <form action="{{ $deleteUrl }}" method="POST" class="inline">
        @csrf
        @method('DELETE')

        <button type="submit"
            onclick="return confirm('Yakin ingin menghapus data ini?')"
            class="text-red-500 hover:text-red-600 text-sm">
            Delete
        </button>
    </form>
@endcan