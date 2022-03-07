@extends('layouts.master')

@push('script-head')
    <script src="https://cdn.tiny.cloud/1/s1rlnqtp5rqd0n01ntx8sqzl8zvlnowhjyqftzsoo5gxdqq3/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endpush

@section('content')

<div class="flex items-center min-h-screen bg-gray-100">
    <div class="container mx-auto">
        <div class="max-w-md mx-auto my-10 bg-white border-2 p-5 rounded-md shadow-sm">
            <div class="text-center">
                <h1 class="my-3 text-3xl font-semibold text-gray-700 ">Buat Toko</h1>
                <p class="text-gray-400 ">Isi form di bawah ini</p>
            </div>
            <div class="m-7">
                <form action="/shop" method="POST" id="form">
                    @csrf
                    <div class="mb-6">
                        @error('name')
                            <div class="text-red-300 font-bold">{{ $message }}</div>
                        @enderror
                        <label for="name" class="block mb-2 text-sm text-gray-600">Nama Toko</label>
                        <input type="text" value="{{ old('name', '') }}" name="name" id="name" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                    </div>
                    <div class="mb-6">
                        @error('address')
                            <div class="text-red-300 font-bold">{{ $message }}</div>
                        @enderror
                        <label for="address" class="block mb-2 text-sm text-gray-600 ">Alamat Toko</label>
                        <input type="text" value="{{ old('address', '') }}" name="address" id="address" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                    </div>
                    <div class="mb-6">
                        @error('bio')
                            <div class="text-red-300 font-bold">{{ $message }}</div>
                        @enderror
                        <label for="bio" class="block mb-2 text-sm text-gray-600">Deskripsi Toko</label>
                        {{-- <input rows="5" name="bio" id="bio" value="{{ old('bio', '') }}" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 "></input> --}}
                        <textarea name="bio" class="form-control my-editor">{!! old('bio', '') !!}</textarea>
                    </div>
                    
                    <div class="mb-6">
                        <button type="submit" class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">Create</button>
                    </div>
                    <p class="text-base text-center text-gray-400" id="result">
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
@endpush