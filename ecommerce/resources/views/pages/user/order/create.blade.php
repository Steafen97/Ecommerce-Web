@extends('layouts.home')

@section('content')

<div class="flex items-center min-h-screen bg-gray-100">
    <div class="container mx-auto">
        <div class="max-w-md mx-auto my-10 bg-white border-2 p-5 rounded-md shadow-sm">
            <div class="text-center">
                <h1 class="my-3 text-3xl font-semibold text-gray-700 ">Buat Order</h1>
                <p class="text-gray-400 ">Isi form di bawah ini untuk membuat order</p>
            </div>
            <div class="m-7">
                <form action="/order" method="POST" id="form">
                    @csrf
                    <div class="mb-6">
                        @error('shopping_address')
                            <div class="text-red-300 font-bold">{{ $message }}</div>
                        @enderror
                        <label for="shopping_address" class="block mb-2 text-sm text-gray-600">Alamat Pengiriman</label>
                        <input type="text" value="{{ old('shopping_address', '') }}" name="shopping_address" id="shopping_address" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                    </div>
                    <div class="mb-6">
                        @error('order_address')
                            <div class="text-red-300 font-bold">{{ $message }}</div>
                        @enderror
                        <label for="order_address" class="block mb-2 text-sm text-gray-600 ">Alamat Penagihan</label>
                        <input type="text" value="{{ old('order_address', '') }}" name="order_address" id="order_address" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                    </div>
                    <div class="mb-6">
                        @error('order_email')
                            <div class="text-red-300 font-bold">{{ $message }}</div>
                        @enderror
                        <label for="order_email" class="block mb-2 text-sm text-gray-600 ">Email untuk Penagihan</label>
                        <input type="text" value="{{ old('order_email', '') }}" name="order_email" id="order_email" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                    </div>
                    <div class="mb-6">
                        @error('order_status')
                            <div class="text-red-300 font-bold">{{ $message }}</div>
                        @enderror
                        <label for="order_status" class="block mb-2 text-sm text-gray-600">Status Order (Isi antara Kilat atau Regular)</label>
                        <input rows="5" name="order_status" id="order_status" value="{{ old('order_status', '') }}" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 "></input>
                    </div>
                    <div class="mb-6">
                        @error('user_id')
                            <div class="text-red-300 font-bold">{{ $message }}</div>
                        @enderror
                        <label for="user_id" class="block mb-2 text-sm text-gray-600 ">Nomor ID User</label>
                        <input type="text" value="{{ old('user_id', '') }}" name="user_id" id="user_id" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
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