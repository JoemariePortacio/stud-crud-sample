<x-layout>

    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-black text-center">Student Information</h2>
        <form action="{{route('add.student')}}" method="post">
            @csrf 
            <div class="grid gap-4 ">
                <div class="">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                          <span class="label-text">Name</span>
                        </div>
                        <input type="text" id="name" name="name" placeholder="Enter your Name" class="input input-bordered w-full max-w-xs" />
                        <div class="label">
                            @error('name')
                            <span class="text-red-500 label-text-alt">{{$message}}</span>
                            @enderror
                        </div>
                      </label>
                </div>
                <div class="">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                          <span class="label-text">Email</span>
                        </div>
                        <input type="text" id="email" name="email" placeholder="Enter your Email" class="input input-bordered w-full max-w-xs" />
                        <div class="label">
                            @error('email')
                            <span class="text-red-500 label-text-alt">{{$message}}</span>
                            @enderror
                        </div>
                      </label>
                </div>
                <div class="">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                          <span class="label-text">Address</span>
                        </div>
                        <input type="text" id="address" name="address" placeholder="Enter your Address" class="input input-bordered w-full max-w-xs" />
                        <div class="label">
                            @error('address')
                            <span class="text-red-500 label-text-alt">{{$message}}</span>
                            @enderror
                        </div>
                      </label>
                </div>
                <div class="">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                          <span class="label-text">Contact</span>
                        </div>
                        <input type="text" id="contact" name="contact" placeholder="Enter your Number" class="input input-bordered w-full max-w-xs" />
                        <div class="label">
                            @error('contact')
                            <span class="text-red-500 label-text-alt">{{$message}}</span>
                            @enderror
                        </div>
                      </label>
                </div>
                <div class="">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                          <span class="label-text">Last School Attended</span>
                        </div>
                        <input type="text" id="previous_school" name="previous_school" placeholder="Previous School" class="input input-bordered w-full max-w-xs" />
                        <div class="label">
                            @error('previous_school')
                            <span class="text-red-500 label-text-alt">{{$message}}</span>
                            @enderror
                        </div>
                      </label>
                </div>
                <div class="">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                          <span class="label-text">School Year</span>
                        </div>
                        <input type="text" id="previous_school_year" name="previous_school_year" placeholder="School Year" class="input input-bordered w-full max-w-xs" />
                        <div class="label">
                            @error('previous_school_year')
                            <span class="text-red-500 label-text-alt">{{$message}}</span>
                            @enderror
                        </div>
                      </label>
                </div>
                <div class="">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                          <span class="label-text">Average</span>
                        </div>
                        <input type="text" id="average" name="average" placeholder="Enter your Average" class="input input-bordered w-full max-w-xs" />
                        <div class="label">
                            @error('average')
                            <span class="text-red-500 label-text-alt">{{$message}}</span>
                            @enderror
                        </div>
                      </label>
                </div>

            </div>
            <button class="btn btn-outline btn-success">Submit</button>
        </form>
    </div>

</x-layout>