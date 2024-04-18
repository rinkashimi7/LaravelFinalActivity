@extends('layout')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Todo List</h1>
    
    <!-- Display flash messages -->
    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-2 mb-4">
            {{ session('success') }}
        </div>
    @endif

    <!-- Display todo list -->
    <ul class="space-y-2">
        @foreach($todos as $todo)
            <li class="flex items-center">
                <span class="mr-2">{{ $todo->title }}</span>
                <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    <!-- Todo creation form -->
    <form action="{{ route('todos.store') }}" method="POST" class="mt-4">
        @csrf
        <input type="text" name="title" placeholder="Enter todo title" class="border border-gray-400 rounded p-2 mr-2">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Todo</button>
    </form>
@endsection