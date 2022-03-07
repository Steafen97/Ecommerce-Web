@extends('layouts.master')
@section('content')
    @if (session('success'))
        <div class="text-white text-l bg-green-600 container text-center mx-auto mt-8 p-4 font-bold">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-3 m-12 mx-24">
        @forelse ($categori as $key => $item)
            <div class="card mr-10 mt-3">
                <img class="card-img-top" src={{ asset('image/' . $item->thumbnail) }} alt={{ $item->name }}>
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ $item->name }}</h4>
                    <p class="card-text">{{ Str::limit($item->description, 10) }}</p>
                </div>
                <div class="card-body">
                    <form action="/categorie/{{ $item->id }}" method="POST">
                        <a href="/categorie/{{ $item->id }}" class="btn btn-info">
                            Detail
                        </a>
                        <a href="{{ route('categorie.edit', $item->id) }}" class="btn btn-warning">
                            Edit
                        </a>
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </div>
            </div>
        @empty
            <h1>No Categorie Found</h>
        @endforelse
    </div>
@endsection
