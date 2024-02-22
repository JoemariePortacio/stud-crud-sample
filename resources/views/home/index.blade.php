@extends('layouts.app-master')

@section('content')
    <div class="bg-gray-100 p-5 rounded">
        @auth
        <h1 class="text-2xl font-bold">Dashboard</h1>
        <p class="text-lg">Only authenticated users can access this section.</p>
        <a href="https://codeanddeploy.com" class="block mt-4 bg-blue-500 text-white py-2 px-4 rounded-lg font-semibold hover:bg-blue-600 transition duration-200">View more tutorials here &raquo;</a>
        @endauth

        @guest
        <h1 class="text-2xl font-bold">Homepage</h1>
        <p class="text-lg">You're viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection
