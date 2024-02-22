<header class="p-3 bg-gray-900 text-white">
    <div class="container mx-auto">
      <div class="flex flex-wrap items-center justify-center lg:justify-start">
        {{-- <a href="/" class="flex items-center mb-2 lg:mb-0 text-white text-decoration-none">
          <svg class="h-10 w-10 me-2" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M6.997 18.002h-.002c-1.1 0-1.992-.893-1.992-1.992V4.992c0-1.1.893-1.992 1.992-1.992h.002c1.1 0 1.992.893 1.992 1.992v11.018c0 1.1-.893 1.992-1.992 1.992zM9.99 14.01V4.992c0-.55-.448-.992-.998-.992h-.002c-.55 0-.998.448-.998.992v9.018c0 .55.448.992.998.992h.002c.55 0 .998-.448.998-.992zm3.996 3.985c-1.1 0-1.992-.893-1.992-1.992V4.992c0-1.1.893-1.992 1.992-1.992h.002c1.1 0 1.992.893 1.992 1.992v11.018c0 1.1-.893 1.992-1.992 1.992zm2.99-3.993c0 .55-.448.993-.998.993h-.002c-.55 0-.998-.443-.998-.993V4.992c0-.55.448-.992.998-.992h.002c.55 0 .998.448.998.992v9.01zm3.999-3.992h-.002c-1.1 0-1.992-.893-1.992-1.992V4.992c0-1.1.893-1.992 1.992-1.992h.002c1.1 0 1.992.893 1.992 1.992v2.037c0 .55-.448.992-.998.992h-.002c-.55 0-.992-.448-.992-.992V4.992c0-.55.448-.992.998-.992h.002c.55 0 .998.448.998.992v1.018h.997c.55 0 .998.443.998.993v5.024c0 .55-.448.993-.998.993zm3.995 0c-1.1 0-1.992-.893-1.992-1.992V4.992c0-1.1.893-1.992 1.992-1.992h.002c1.1 0 1.992.893 1.992 1.992v9.018c0 1.1-.893 1.992-1.992 1.992zm-7.99 3.993V4.992c0-.55-.448-.992-.998-.992h-.002c-.55 0-.998.448-.998.992v11.018c0 .55.448.992.998.992h.002c.55 0 .998-.443.998-.993z"/></svg>
        </a> --}}
  
        <ul class="nav col-12 lg:col-auto mb-2 justify-center lg:justify-start">
          <li><a href="#" class="nav-link px-2 text-gray-400 hover:text-white">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white hover:text-white">Features</a></li>
          <li><a href="#" class="nav-link px-2 text-white hover:text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white hover:text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white hover:text-white">About</a></li>
        </ul>
  
        <form class="col-12 lg:col-auto mb-3 lg:mb-0 me-lg-3">
          <input type="search" class="form-control bg-gray-800 text-white" placeholder="Search..." aria-label="Search">
        </form>
  
        @auth
          <div class="text-end">
            <span class="text-white me-2">{{auth()->user()->name}}</span>
            <a href="{{ route('logout.perform') }}" class="btn btn-outline-light">Logout</a>
          </div>
        @endauth
  
        @guest
          <div class="text-end">
            <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
            <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
          </div>
        @endguest
      </div>
    </div>
</header>
