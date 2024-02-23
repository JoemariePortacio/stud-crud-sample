<x-layout>

    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-black text-center">Teacher Information</h2>
        <form action="{{route('teacher.update', $editinfo->id)}}" method="post">
            @csrf 
            @method('PUT')
            <div class="grid gap-4 ">
                <div class="">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                          <span class="label-text">Name</span>
                        </div>
                        <input type="text" id="name" value="{{$editinfo->name}}" name="name" placeholder="Enter your Name" class="input input-bordered w-full max-w-xs" />
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
                        <input type="text" id="email" name="email" value="{{$editinfo->email}}" placeholder="Enter your Email" class="input input-bordered w-full max-w-xs" />
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
                        <input type="text" id="address" name="address" value="{{$editinfo->address}}" placeholder="Enter your Address" class="input input-bordered w-full max-w-xs" />
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
                        <input type="text" id="contact" name="contact" value="{{$editinfo->contact}}" placeholder="Enter your Number" class="input input-bordered w-full max-w-xs" />
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
                        <span class="label-text">Status</span>
                      </div>
                      <input type="text" id="status" name="status" value="{{$editinfo->status}}" placeholder="Enter your Status" class="input input-bordered w-full max-w-xs" />
                      <div class="label">
                          @error('status')
                          <span class="text-red-500 label-text-alt">{{$message}}</span>
                          @enderror
                      </div>
                    </label>
                </div>
                <div class="">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                          <span class="label-text">Position</span>
                        </div>
                        <input type="text" id="position" name="position" value="{{$editinfo->posotion}}" placeholder="Enter your Position" class="input input-bordered w-full max-w-xs" />
                        <div class="label">
                            @error('position')
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