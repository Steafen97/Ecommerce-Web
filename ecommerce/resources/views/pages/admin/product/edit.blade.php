@extends('layouts.master')

@section('content')

<div class="flex items-center min-h-screen bg-gray-50">
    <div class="container mx-auto">
        <div class="max-w-md mx-auto my-10 bg-white border-2 p-5 rounded-md shadow-sm">
            <div class="text-center">
                <h1 class="my-3 text-3xl font-semibold text-gray-700 ">Edit Produk</h1>
                <p class="text-gray-400 ">Isi form di bawah ini</p>
            </div>
            <div class="m-7">
                <form action="{{route('product.show',['product' => $product->id])}}" method="POST" id="form">
                    @csrf
                    @method('PUT')
                    <div class="mb-6">
                        @error('name')
                            <div class="text-red-300 font-bold">{{ $message }}</div>
                        @enderror
                        <label for="name" class="block mb-2 text-sm text-gray-600">Nama Produk</label>
                        <input type="text" value="{{ old('name', $product->name) }}" name="name" id="name" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                    </div>
                    <div class="mb-6">
                        @error('price')
                            <div class="text-red-300 font-bold">{{ $message }}</div>
                        @enderror
                        <label for="price" class="block mb-2 text-sm text-gray-600 ">Harga</label>
                        <input type="price" value="{{ old('price', $product->price) }}" name="price" id="price" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                    </div>
                    <div class="mb-6">
                        @error('weight')
                            <div class="text-red-300 font-bold">{{ $message }}</div>
                        @enderror
                        <label for="weight" class="block mb-2 text-sm text-gray-600 ">Berat dalam Kg</label>
                        <input type="weight" value="{{ old('weight', $product->weight) }}" name="weight" id="weight" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                    </div>
                    <div class="mb-6">
                        @error('descriptions')
                            <div class="text-red-300 font-bold">{{ $message }}</div>
                        @enderror
                        <label for="descriptions" class="block mb-2 text-sm text-gray-600">Deskripsi Produk</label>
                        <input rows="5" name="descriptions" id="descriptions" value="{{ old('descriptions', $product->descriptions) }}" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 "></input>
                    </div>
                    <div class="mb-6">
                        @error('image')
                            <div class="text-red-300 font-bold">{{ $message }}</div>
                        @enderror
                        <label for="image" class="block mb-2 text-sm text-gray-600 ">URL Gambar</label>
                        <input type="text" value="{{ old('image', $product->image) }}" name="image" id="image" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                    </div>
                    <div class="mb-6">
                        @error('stock')
                            <div class="text-red-300 font-bold">{{ $message }}</div>
                        @enderror
                        <label for="stock" class="block mb-2 text-sm text-gray-600 ">Jumlah Stok Produk</label>
                        <input type="stock" value="{{ old('stock', $product->stock) }}" name="stock" id="stock" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                    </div>
                    <div class="mb-6">
                        @error('categories_id')
                            <div class="text-red-300 font-bold">{{ $message }}</div>
                        @enderror
                        <label for="categories_id" class="block mb-2 text-sm text-gray-600 ">Kategori</label>
                        <input type="categories_id" value="{{ old('categories_id', $product->categories_id) }}" name="categories_id" id="categories_id" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                    </div>
                    <div class="mb-6">
                        <button type="submit" class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">Edit</button>
                    </div>
                    <p class="text-base text-center text-gray-400" id="result">
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection