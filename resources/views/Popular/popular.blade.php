@extends('layout.main')

@section('container')
<h1 class="text-3xl font-bold text-center my-8 text-white">Popular Page</h1>
<div class="relative overflow-x-auto shadow-md">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">No</th>
                <th scope="col" class="px-6 py-3">Image</th>
                <th scope="col" class="px-6 py-3">Title</th>
                {{-- <th scope="col" class="px-6 py-3">Genre</th> --}}
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($popular as $populars)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"> 
                <td class="px-3 py-4">{{ $populars->id }}</td>
                <td class="px-3 py-4 w-32">
                    <img src="{{ $populars->image }}" alt="gambar ga keload" class="max-w-full">
                </td>
                <td class="px-6 py-4">{{ $populars->title }}</td>
                {{-- <td class="px-6 py-4">{{ $populars->genre }}</td> --}}
                <td class="px-6 py-4">
                    <a href="/popular/detail{{ $populars->id }}">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Detail
                        </button>
                    </a>
                </td>
            </tr>
            @endforeach   
        </tbody>
    </table>
</div>
@endsection
