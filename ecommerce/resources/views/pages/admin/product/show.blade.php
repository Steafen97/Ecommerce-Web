@extends('layouts.master')

@section('content')

<div class="flex flex-col justify-center">
    <div>
        <h1 class="text-center font-bold my-8 text-xl ">
            Detail of {{ $product->name }}
        </h1>
    </div>
    <div class="bg-gray-100 shadow-xl p-12 mx-6 my-6">
        <img src = {{$product->image}} alt = {{$product->name}} width = "300" height = "300">
        <p class="m-6 text-2xl font-bold  ">
            Nama : {{ $product->name }}
        </p>
        <p class="m-6 text-2xl font-bold  ">
            Harga : {{ $product->price}}
        </p>
        <p class="m-6 text-2xl font-bold  ">
            Berat : {{ $product->weight}} kg
        </p>
        <p class="m-6 text-2xl font-bold  ">
            Deskripsi : {{ $product->descriptions }}
        </p>
        <p class="m-6 text-2xl font-bold  ">
            Jumlah Stok : {{ $product->stock }}
        </p>
        <p class="m-6 text-2xl font-bold  ">
            Kategori : {{ $product->categorie->name }}
        </p>
    </div>
</div>



@endsection