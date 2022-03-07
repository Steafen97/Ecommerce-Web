@extends('layouts.master')

@section('content')
    <div class="flex items-center min-h-screen bg-gray-100">
        <div class="container mx-auto">
            <div class="max-w-md mx-auto my-10 bg-white border-2 p-5 rounded-md shadow-sm">
                <div class="text-center">
                    <h1 class="my-3 text-3xl font-semibold text-gray-700 ">Tambah Categorie</h1>
                    <p class="text-gray-400 ">Isi form di bawah ini</p>
                </div>
                <div class="m-7">
                    <form action="/categorie" method="POST" id="form" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            @error('name')
                                <div class="text-red-300 font-bold">{{ $message }}</div>
                            @enderror
                            <label for="name" class="block mb-2 text-sm text-gray-600">Nama Categorie</label>
                            <input type="text" value="{{ old('name', '') }}" name="name" id="name"
                                class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                        </div>
                        <div class="mb-6">
                            @error('description')
                                <div class="text-red-300 font-bold">{{ $message }}</div>
                            @enderror
                            <label for="description" class="block mb-2 text-sm text-gray-600 ">Deskripsi</label>
                            <input type="text" value="{{ old('description', '') }}" name="description" id="description"
                                class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                            {{-- <textarea name="description"
                                class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                                id="description">{{ old('description', '') }}</textarea> --}}
                        </div>
                        <div class="mb-6">
                            @error('thumbnail')
                                <div class="text-red-300 font-bold">{{ $message }}</div>
                            @enderror
                            <label for="thumbnail" class="block mb-2 text-sm text-gray-600 ">Thumbnail</label>
                            <input type="file" value="{{ old('thumbnail', '') }}" name="thumbnail" id="thumbnail"
                                class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                        </div>

                        <div class="mb-6">
                            <button type="submit"
                                class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">Add</button>
                        </div>
                        <p class="text-base text-center text-gray-400" id="result">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
