<div class="max-w-4xl mx-auto my-8 p-6 bg-white rounded-xl shadow-sm border border-gray-100 border-t-4 border-t-indigo-600 font-sans">
    <div class="flex items-center gap-2 mb-6">
        <div class="w-2.5 h-6 bg-indigo-600 rounded-full"></div>
        <h2 class="text-xl font-bold text-gray-800">Ubah Data Produk</h2>
    </div>

    <form action="{{ route('products.update', $product) }}" method="POST" class="space-y-5">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="block text-sm font-medium text-indigo-950 mb-1">Nama Produk</label>
            <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" 
                class="block w-full rounded-lg border border-indigo-200 px-3 py-2 text-sm focus:border-indigo-600 focus:ring-2 focus:ring-indigo-500/20 outline-none transition">
            @error('name') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- field lain mengikuti pola yang sama -->

        <div class="flex justify-end items-center gap-3 pt-4 border-t border-gray-100">
            <a href="{{ route('products.index') }}" class="px-4 py-2 text-sm font-medium text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200 transition">
                Batal
            </a>
            <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 rounded-lg shadow-md shadow-indigo-200 transition">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>