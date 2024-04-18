@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create Todo</h1>

    <!-- Todo creation form -->
    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Enter todo title" class="border border-gray-400 rounded p-2 mb-2">
        @error('title')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Todo</button>
    </form>
@endsection