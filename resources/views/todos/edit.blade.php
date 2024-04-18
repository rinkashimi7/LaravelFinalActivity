@extends('layout')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Todo</h1>

    <!-- Todo update form -->
    <form action="{{ route('todos.update', $todo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $todo->title }}" class="border border-gray-400 rounded p-2 mb-2">
        @error('title')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Todo</button>
    </form>
@endsection