@extends('layouts.auth-master')

@section('content')
    <div class=" h-full flex flex-col justify-center  px-8 py-6 max-w-md mx-auto">

        <form method="post" action="{{ route('register.perform') }}" class="bg-white shadow-md p-7 rounded-md">
            @csrf
            <h1 class="text-3xl font-semibold mb-6 text-center">Register</h1>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-start text-gray-700">Email address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your Email" required autofocus class="mt-1 form-input rounded-md shadow-sm block w-full">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-start text-gray-700">Username</label>
                <input type="text" id="username" name="username" value="{{ old('username') }}" placeholder="Enter your Username" required autofocus class="mt-1 form-input rounded-md shadow-sm block w-full">
                @error('username')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-start text-gray-700">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your Password" required class="mt-1 form-input rounded-md shadow-sm block w-full">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm text-start font-medium text-gray-700">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required class="mt-1 form-input rounded-md shadow-sm block w-full">
                @error('password_confirmation')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button class="w-full py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition duration-200" type="submit">Register</button>
        </form>
    </div>
@endsection
