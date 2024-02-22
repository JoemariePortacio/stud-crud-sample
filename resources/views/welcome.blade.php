<x-layout>        
    

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase  ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Address
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Contact
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Last School Attended
                    </th>
                    <th scope="col" class="px-6 py-3">
                        School Year
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Average
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($info as $item)
                <tr class="bg-white border-b border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                        {{$item->id}}
                    </th>
                    <td>
                        {{$item->name}}
                    </td>
                    <td>
                        {{$item->email}}
                    </td>
                    <td>
                        {{$item->address}}
                    </td>
                    <td>
                        {{$item->contact}}
                    </td>
                    <td>
                        {{$item->previous_school}}
                    </td>
                    <td>
                        {{$item->previous_school_year}}
                    </td>
                    <td>
                        {{$item->average}}
                    </td>
                    <td>
                        <button><a class="bg-green-500 rounded" href="{{route('edit', $item->id)}}">Update</a></button>
                        
                        <form action="{{route('delete', $item->id)}}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class=" bg-red-500 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <button class="btn btn-primary my-5 m-10 hover:to-blue-500 bg-blue-500 px-4 py-2 rounded">
        <a href="{{route('create.student')}}">add user</a>
    </button>
    <div class="text-end">
        <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
      </div>

</x-layout>

