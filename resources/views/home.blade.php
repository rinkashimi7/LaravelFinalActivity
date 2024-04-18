@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="mb-4">
                        <h1 class="text-center text-xl font-bold">{{ __('Dashboard') }}</h1>
                    </div>
                    <div class="text-center">
                        @if (session('status'))
                            <div class="bg-green-500 text-white font-bold rounded-md p-4 mb-4">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p>{{ __('You are logged in!') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('todos.create')
@endsection