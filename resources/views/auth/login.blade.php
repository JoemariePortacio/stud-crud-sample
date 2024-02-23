@extends('layouts.auth-master')

@section('content')
    <div class="flex justify-center items-center h-screen">
        <form method="post" action="{{ route('login.perform') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 max-w-md mx-auto">
            @csrf
            
            <h1 class="text-3xl font-semibold mb-6 text-center">Login</h1>

            @include('layouts.partials.messages')

            <div class="mb-4">
                <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Email or Username</label>
                <input type="text" id="username" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500">
                @error('username')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="Password" required class="appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:border-blue-500">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button class="w-full py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition duration-200" type="submit">Login</button>
            <div class="underline hover:underline-offset-4 pt-2">
                <a href="{{route('register')}}">Register</a>
            </div>
            
        </form>
            
    </div>
@endsection
