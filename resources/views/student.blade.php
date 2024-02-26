<x-system>
    <div class="flex h-fit">
        <!-- Table Content -->
        <div class="container mx-auto pt-24 pb-8 px-4">
            <div class="p-4 text-center font-bold text-3xl ">
                <h3>List of Students</h3>
            </div>
            <div class="flex flex-col md:flex-row justify-between mt-6">
                <div class="flex">
                    <form class="flex">
                        <input
                            type="search"
                            class="relative m-0 -mr-0.5 flex-auto rounded border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                            placeholder="Search"
                            aria-label="Search"
                            name="search"
                            value="{{ request('search')}}"
                            aria-describedby="button-addon3" />
                        <button
                            type="submit"
                            class="inline-flex items-center mx-1 px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out"
                            type="button"
                            id="button-addon3"
                            data-te-ripple-init>
                            Search
                        </button>
                    </form>
                </div>
                <a href="{{ route('create.student') }}" class="inline-flex items-center px-4 py-2 mt-4 md:mt-0 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out"><i class="fa-solid fa-user-plus m-1"></i>Add Student</a>
            </div>

            <div class="overflow-x-auto pt-3">
                <table class="w-full   bg-white shadow-md rounded-lg">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gradient-to-r from-gray-200 to-gray-100 text-xs font-semibold text-gray-700 uppercase tracking-wider">ID</th>
                            <th class="px-6 py-3 bg-gradient-to-r from-gray-200 to-gray-100 text-xs font-semibold text-gray-700 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 bg-gradient-to-r from-gray-200 to-gray-100 text-xs font-semibold text-gray-700 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 bg-gradient-to-r from-gray-200 to-gray-100 text-xs font-semibold text-gray-700 uppercase tracking-wider">Address</th>
                            <th class="px-6 py-3 bg-gradient-to-r from-gray-200 to-gray-100 text-xs font-semibold text-gray-700 uppercase tracking-wider">Contact</th>
                            <th class="px-6 py-3 bg-gradient-to-r from-gray-200 to-gray-100 text-xs font-semibold text-gray-700 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 bg-gradient-to-r from-gray-200 to-gray-100 text-xs font-semibold text-gray-700 uppercase tracking-wider">Course</th>
                            <th class="px-6 py-3 bg-gradient-to-r from-gray-200 to-gray-100 text-xs font-semibold text-gray-700 uppercase tracking-wider">Last School Attended</th>
                            <th class="px-6 py-3 bg-gradient-to-r from-gray-200 to-gray-100 text-xs font-semibold text-gray-700 uppercase tracking-wider">School Year</th>
                            <th class="px-6 py-3 bg-gradient-to-r from-gray-200 to-gray-100 text-xs font-semibold text-gray-700 uppercase tracking-wider">Average</th>
                            <th class="px-6 py-3 bg-gradient-to-r from-gray-200 to-gray-100 text-xs font-semibold text-gray-700 uppercase tracking-wider">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    @foreach ($info as $item)
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $item->id }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $item->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $item->email }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $item->address }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $item->contact }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $item->status }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $item->course }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $item->previous_school }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $item->previous_school_year }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $item->average }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">
                                <div class="flex items-center space-x-4">
                                    <a href="{{ route('edit', $item->id) }}" class="btn  btn-success text-white">Edit</a>
                                    <label for="delete{{$loop->index+1}}" class="btn btn-error text-white">Delete</label>
                                    <div>
                                    <input type="checkbox" id="delete{{$loop->index+1}}" class="modal-toggle" />
                                        <div class="modal" role="dialog">
                                            <div class="modal-box">
                                                <h3 class="font-bold text-lg">Are you sure?</h3>
                                                <p class="py-4">do you want to delete?</p>
                                                <div class="modal-action">
                                                    <form action="{{ route('delete', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"  class="btn btn-success text-white">Yes</button>
                                                        <label for="delete{{$loop->index+1}}" class="btn btn-error text-white">No</label>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            {!! $info->withQueryString()->links() !!}
        </div>
    </div>
</x-system>