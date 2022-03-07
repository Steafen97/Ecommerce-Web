@extends('layouts.home')

@section('content')

<div class="flex flex-col justify-center">
    <div>
        <h1 class="text-center font-bold my-8 text-xl ">
            Detail of Order
        </h1>
    </div>
    <div class="bg-gray-100 shadow-xl p-12 mx-6 my-6">
        <img src = "https://miuc.org/wp-content/uploads/2019/08/How-do-we-use-money-1280x720.jpg" alt = "Order" width = "300" height = "300">
        <p class="m-6 text-2xl font-bold  ">
            Alamat Pengiriman : {{ $order->shopping_address }}
        </p>
        <p class="m-6 text-2xl font-bold  ">
            Alamat Penagihan  : {{ $order->order_address}}
        </p>
        <p class="m-6 text-2xl font-bold  ">
            Email : {{ $order->order_email}}
        </p>
        <p class="m-6 text-2xl font-bold  ">
            Status Order : {{ $order->order_status }}
        </p>
        <p class="m-6 text-2xl font-bold  ">
            Pemesan : {{ $order->user_id }}
        </p>

    </div>
</div>

@endsection