@extends('layout.main')

@section('container')
<a href="/favorite" class="text-5xl ml-20"><button class="mt-10 text-white"><ion-icon name="arrow-back-circle-outline"></ion-icon></button></a>
<div class="flex justify-center items-center mt-2"> 
    <div class="my-8 p-4 border bg-gray-800 flex items-start">
        <img src="{{ $popular->image }}" alt="gambar" class="mr-4">
        <div>
            <h2 class="text-3xl font-bold mb-10 text-white">Detail anime</h2>
            <p class="mb-1 text-2xl text-white">Title: {{ $popular->title }}</p>
            <p class="mb-1 text-2xl text-white">Genre: {{ $popular->genre }}</p>
            <p class="mb-1 text-2xl text-white">Episode: {{ $popular->episode }}</p>
            <p class="mb-1 text-2xl text-white">Rating: {{ $popular->rating }}</p>
            <p class="mb-1 text-2xl text-white">Release Date: {{ $popular->release_date }}</p>
        </div>
    </div>
</div>
@endsection
