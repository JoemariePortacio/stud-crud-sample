@extends('layouts.auth-master')

@section('content')
    <div class="flex justify-center items-center h-screen">
        <form method="post" action="{{ route('login.perform') }}" class="max-w-md mx-auto">
            @csrf
            
            <h1 class="text-3xl font-semibold mb-6 text-center">Login</h1>

            @include('layouts.partials.messages')

            <div class="mb-4">
                <label for="username" class="block mb-2">Email or Username</label>
                <input type="text" id="username" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus class="w-full px-4 py-2 rounded-lg border-gray-300 focus:border-blue-500 focus:outline-none">
                @error('username')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="password" class="block mb-2">Password</label>
                <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="Password" required class="w-full px-4 py-2 rounded-lg border-gray-300 focus:border-blue-500 focus:outline-none">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button class="w-full py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition duration-200" type="submit">Login</button>
            
            @include('auth.partials.copy')
        </form>
    </div>
@endsection
