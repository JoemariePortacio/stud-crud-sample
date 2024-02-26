<!-- resources/views/courses/index.blade.php -->

{{-- @extends('system.app') --}}
<x-system>

    <div class="flex h-fit">
        <div class="container mx-auto pt-24 pb-8 px-4">
        <h1 class="p-4 text-center font-bold text-3xl">List of Courses</h1>
            <div class="flex flex-col md:flex-row justify-between mt-6">
                <div class="flex">
                    <form class="flex">
                        <label class="input input-bordered flex items-center gap-2">
                            <input type="text" class="grow" placeholder="Search"  />
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70" value="{{ request('search')}}><path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" /></svg>
                        
                        </label>
                    </form>
                </div>
                <a href="{{ route('courses.create') }}" class="btn btn-info text-white"><i class="fa-solid fa-user-plus m-1"></i>Add New Courses</a>
            </div>
            <div class="overflow-x-auto">
                <table class="table">
                  <!-- head -->
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Course</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200">
                    @foreach ($courses as $course)
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $course->id }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $course->title }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $course->description }}</td>
                    @endforeach
                    </tr>
                    </tbody>
                </table>
              </div>
        </div>
    </div>



    {{-- <div class="flex h-fit">
        <h1 class="text-2xl font-bold my-4">Courses</h1>
        <a href="{{ route('courses.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Create New Course</a>
        <table class="h-full border">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Title</th>
                    <th class="border px-4 py-2">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td class="border px-4 py-2">{{ $course->title }}</td>
                        <td class="border px-4 py-2">{{ $course->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}

</x-system>

