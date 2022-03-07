@extends('layouts.home')

@section('content')

@if(session('success'))

<div class="text-white text-l bg-green-600 container text-center mx-auto mt-8 p-4 font-bold">
    {{ session('success') }}
</div>

@endif

<div class="grid grid-cols-3 m-12 mx-24">
@forelse ($order as $key => $order )
        <div class="card mr-10 mt-3">
            <img class="card-img-top" src="https://miuc.org/wp-content/uploads/2019/08/How-do-we-use-money-1280x720.jpg" alt="Order">
        <div class="card-body">
            <p class="card-text">Alamat Pengiriman : {{ $order->shopping_address }}</p>
            <p class="card-text">Alamat Penagihan  : {{ $order->order_address}}</p>
            <p class="card-text">Email : {{ $order->order_email}}</p>
            <p class="card-text">Status Order : {{ $order->order_status }}</p>
            <p class="card-text">Pemesan : {{ $order->user_id }}</p>
        </div>
        <div class="card-text">
            <a href="{{ url("/order/$order->id") }}" class="bg-yellow-400 text-white font-bold py-2 px-6 ml-6">
                Detail
            </a>
            <a href="{{ url("/order/$order->id/edit") }}" class="bg-yellow-700 text-white font-bold py-2 px-6 ml-6">
                Edit
            </a>
            <form action="/order/{{ $order->id }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="bg-red-600 text-white font-bold py-2 px-6 ml-20 mt-6">
            </form>
        </div>
        </div>
@empty
<h1>No Order Found</h>
@endforelse
</div>

@endsection