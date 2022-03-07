@extends('layouts.master')

@section('content')

@if(session('success'))

<div class="text-white text-l bg-green-600 container text-center mx-auto mt-8 p-4 font-bold">
    {{ session('success') }}
</div>

@endif

<div class="grid grid-cols-3 m-12 mx-24">
@forelse ($shop as $key => $item )
        <div class="card mr-10 mt-3">
            <img class="card-img-top" src="https://png.pngtree.com/png-vector/20190130/ourlarge/pngtree-hand-painted-cartoon-store-store-with-awning-in-front-paintedcartoonawningstorestorego-out-png-image_619067.jpg" alt="Gambar Toko">
        <div class="card-body">
            <h4 class="card-title mb-3">{{ $item->name }}</h4>
            <p class="card-text">{!! $item->bio !!}</p>
            <p class="card-text">{{ $item->address}}</p>
        </div>
        <div class="card-text">
            <a href="{{ url("/shop/$item->id") }}" class="bg-yellow-400 text-white font-bold py-2 px-6 ml-6">
                Detail
            </a>
            <a href="{{ url("/shop/$item->id/edit") }}" class="bg-yellow-700 text-white font-bold py-2 px-6 ml-6">
                Edit
            </a>
            <form action="/shop/{{ $item->id }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="bg-red-600 text-white font-bold py-2 px-6 ml-20 mt-6">
            </form>
        </div>
        </div>
@empty
<h1>No Shop Found</h>
@endforelse
</div>

@endsection