@extends('layouts.master')

@section('content')

@if(session('success'))

<div class="text-white text-l bg-green-600 container text-center mx-auto mt-8 p-4 font-bold">
    {{ session('success') }}
</div>

@endif

<div class="grid grid-cols-3 m-12 mx-24">
@forelse ($product as $key => $item )
        <div class="card mr-10 mt-3">
            <img class="card-img-top" src={{$item->image}} alt={{$item->name}}>
        <div class="card-body">
            <h4 class="card-title mb-3">{{ $item->name }}</h4>
            <p class="card-text">{{ $item->descriptions }}</p>
            <p class="card-text">Harga        : {{ $item->price}}</p>
            <p class="card-text">Jumlah Stock : {{ $item->stock }}</p>
            <p class="card-text">Kategori     : {{ $item->categorie->name }}</p>
        </div>
        <div class="card-text">
            <a href="{{ url("/product/$item->id") }}" class="bg-yellow-400 text-white font-bold py-2 px-6 ml-6">
                Detail
            </a>
            <a href="{{ url("/product/$item->id/edit") }}" class="bg-yellow-700 text-white font-bold py-2 px-6 ml-6">
                Edit
            </a>
            <form action="/product/{{ $item->id }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="bg-red-600 text-white font-bold py-2 px-6 ml-20 mt-6">
            </form>
        </div>
        </div>
@empty
<h1>No Product Found</h>
@endforelse
</div>

@endsection