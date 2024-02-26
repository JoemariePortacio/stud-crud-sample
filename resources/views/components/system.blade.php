<x-layout>
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div id="sidebar" class="bg-gray-800 text-white w-full md:w-64 hidden md:flex flex-col">
            <div class="flex md:hidden  justify-start text-lg">
                <button type="button" onclick="openSB()">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="flex items-center ml-2 pt-2">
                <img src="{{ asset('img/dctlogo.png') }}" alt="Example Image" class="rounded-full w-10 h-10 object-contain">
            </div>
            
            <nav class="flex-1 pt-5">
                <ul class="space-y-0 md:space-y-2 sm:flex sm:flex-col">
                    <!-- Sidebar links -->
                    <li>
                        <a href="{{route('home')}}" class="block px-4 py-2 hover:bg-gray-700"><i class="fa-solid fa-house mr-2"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="{{route('student')}}" class="block px-4 py-2 hover:bg-gray-700"><i class="fa-solid fa-user-graduate mr-2"></i>Students</a>
                    </li>
                    <li>
                        <a href="{{route('teacher.home')}}" class="block px-4 py-2 hover:bg-gray-700"><i class="fa-solid fa-user-tie mr-2"></i>Teachers</a>
                    </li>
                    <li>
                        <a href="{{route('parent.home')}}" class="block px-4 py-2 hover:bg-gray-700"><i class="fa-solid fa-user-group mr-2"></i>Parents</a>
                    </li>
                    <li>
                        <a href="{{route('courses.course')}}" class="block px-4 py-2 hover:bg-gray-700"><i class="fa-solid fa-book-open mr-2"></i>Courses</a>
                    </li>
                    <li>
                        <a href="{{route('fullcalender')}}" class="block px-4 py-2 hover:bg-gray-700"><i class="fa-solid fa-calendar mr-2"></i>Calendar</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-700"><i class="fa-solid fa-newspaper mr-2"></i>News</a>
                    </li>
                </ul>
            </nav>
            
            <div class="p-4 border-t flex flex-col border-gray-700">
                <a href="{{route('accounts.home')}}" class="text-sm hover:text-gray-400 hover:bg-slate-500 rounded px-2 py-3"><i class="fa-solid fa-user-gear mr-2"></i>Accounts</a>
                <a href="{{ route('logout.perform') }}" class="text-sm hover:text-gray-400 hover:bg-slate-500 rounded px-2 py-3"><i class="fa-solid fa-right-from-bracket mr-2"></i>Logout</a>
            </div>
        </div>
        
        
        <!-- Main Content -->
        <div class="flex-1 bg-gray-100 overflow-y-auto">
            <!-- Navbar -->
            <div class="bg-white shadow-md fixed w-screen z-50 ">
                <div class="container  px-4">
                    <div class="flex  justify-between items-center py-4">
                        <div class="flex md:hidden  justify-start text-2xl">
                            <button type="button" onclick="openSB()">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                        </div>
                        <div>
                            <span class="text-lg font-semibold ">School Management System</span>
                        </div>
                        <!-- Add any navbar items or icons here -->

                    </div>
                </div>
            </div>
            
            <!-- Table Content -->
                {{$slot}}
                <div class="py-3 flex justify-end text-gray-500">
                    <div class="text-sm mx-8 ">
                    <span>©2024, All rights reserved</span>
                    </div>
                </div>
        </div>
        
    </div>
</x-layout>

