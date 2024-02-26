<!-- resources/views/courses/create.blade.php -->

{{-- @extends('system.app') --}}
<x-layout>

    <div class="flex w-full h-fit">
        <h1 class="text-2xl font-bold my-4">Create New Course</h1>
        <form action="{{ route('courses.store') }}" method="POST" class="max-w-md">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                <input type="text" name="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                <textarea name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>
            <button type="submit" class="mt-20 btn btn-info text-white">Create Course</button>
        </form>
    </div>

</x-layout>
