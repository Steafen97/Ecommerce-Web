@extends('layouts.master')

@section('content')

<div class="flex flex-col justify-center">
    <div>
        <h1 class="text-center font-bold my-8 text-xl ">
            Detail of {{ $shop->name }}
        </h1>
    </div>
    <div class="bg-gray-100 shadow-xl p-12 mx-6 my-6">
        <img src = "https://png.pngtree.com/png-vector/20190130/ourlarge/pngtree-hand-painted-cartoon-store-store-with-awning-in-front-paintedcartoonawningstorestorego-out-png-image_619067.jpg" alt = "Gambar Toko" width = "300" height = "300">
        <p class="m-6 text-2xl font-bold  ">
            Nama Toko : {{ $shop->name }}
        </p>
        <p class="m-6 text-2xl font-bold  ">
            Alamat    : {{ $shop->address}}
        </p>
        <p class="m-6 text-2xl font-bold  ">
            Deskripsi : {{ $shop->bio}}
        </p>
    </div>
</div>