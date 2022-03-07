@extends('layouts.master')

@section('content')
    <div class="flex flex-col justify-center">
        <div>
            <h1 class="text-center font-bold my-8 text-xl ">
                Detail of {{ $categorie->name }}
            </h1>
        </div>
        <div class="bg-gray-100 shadow-xl p-12 mx-6 my-6">
            <img src={{ asset('image/' . $categorie->thumbnail) }} alt={{ $categorie->name }} width="300" height="300">
            <p class="m-6 text-2xl font-bold  ">
                Nama : {{ $categorie->name }}
            </p>
            <p class="m-6 text-2xl font-bold  ">
                Deskripsi : {{ $categorie->description }}
            </p>
        </div>
    </div>
@endsection
