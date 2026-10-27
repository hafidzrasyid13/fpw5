
<script src="https://cdn.tailwindcss.com"></script>

<div class="max-w-4xl mx-auto my-8 p-6 bg-white rounded-xl shadow-sm border border-gray-100 font-sans">
    <h2 class="text-xl font-bold text-gray-800 mb-6">Tambah Data Produk</h2>
    
    <form action="{{ route('products.store') }}" method="POST" class="space-y-5">
        @csrf
        
        <!-- Kategori -->
        <div>
            <label for="category_id" class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
            <select name="category_id" id="category_id" class="block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 outline-none transition">
                <option value="" disabled selected>Pilih kategori</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Kode Produk -->
            <div>
                <label for="code" class="block text-sm font-medium text-gray-700 mb-1">Kode Produk</label>
                <input type="text" name="code" id="code" value="{{ old('code') }}" placeholder="Contoh: P004" class="block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 outline-none transition">
                @error('code') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Nama Produk -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Produk</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Contoh: Kopi Bubuk" class="block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 outline-none transition">
                @error('name') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Satuan -->
            <div>
                <label for="unit" class="block text-sm font-medium text-gray-700 mb-1">Satuan</label>
                <input type="text" name="unit" id="unit" value="{{ old('unit', 'pcs') }}" class="block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 outline-none transition">
                @error('unit') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Harga -->
            <div>
                <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Harga (Rp)</label>
                <input type="number" name="price" id="price" value="{{ old('price') }}" placeholder="0" class="block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 outline-none transition">
                @error('price') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Stok Awal -->
            <div>
                <label for="stock" class="block text-sm font-medium text-gray-700 mb-1">Stok Awal</label>
                <input type="number" name="stock" id="stock" value="{{ old('stock', 0) }}" class="block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 outline-none transition">
                @error('stock') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>
        </div>

        <!-- Tombol Aksi -->
        <div class="flex justify-end items-center gap-3 pt-4 border-t border-gray-100">
            <a href="{{ route('products.index') }}" class="px-4 py-2 text-sm font-medium text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200 transition">
                Batal
            </a>
            <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 shadow-sm transition">
                Simpan Produk
            </button>
        </div>
    </form>
</div>