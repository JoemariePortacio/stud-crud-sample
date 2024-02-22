@extends('layouts.auth-master')

@section('content')
    <div class="container mx-auto">
        <form method="post" action="{{ route('register.perform') }}" class="max-w-md mx-auto">
            @csrf
                
            <h1 class="text-3xl font-semibold mb-6 text-center">Register</h1>

            <div class="mb-4">
                <label for="email" class="block mb-2 text-start">Email address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your Email" required autofocus class="w-full px-4 py-2 rounded-lg border-gray-300 focus:border-blue-500 focus:outline-none">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="username" class="block mb-2 text-start">Username</label>
                <input type="text" id="username" name="username" value="{{ old('username') }}" placeholder="Enter your Username" required autofocus class="w-full px-4 py-2 rounded-lg border-gray-300 focus:border-blue-500 focus:outline-none">
                @error('username')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="password" class="block mb-2 text-start">Password</label>
                <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="Enter your Password" required class="w-full px-4 py-2 rounded-lg border-gray-300 focus:border-blue-500 focus:outline-none">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block mb-2 text-start">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required class="w-full px-4 py-2 rounded-lg border-gray-300 focus:border-blue-500 focus:outline-none">
                @error('password_confirmation')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button class="w-full py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition duration-200" type="submit">Register</button>
            
            @include('auth.partials.copy')
        </form>
    </div>
@endsection
