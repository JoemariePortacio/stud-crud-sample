<x-layout>

    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-black text-center">Student Information</h2>
      <form action="{{route('update', $editinfo->id)}}" method="post">
        @csrf 
        @method('PUT')
        <div class="grid gap-4 ">
          <div>
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
          <div>
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
          <div>
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
          <div>
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
          <div>
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
          <div>
            <label class="form-control w-full max-w-xs">
              <div class="label">
                <span class="label-text">Last School Attended</span>
              </div>
              <input type="text" id="previous_school" name="previous_school" value="{{$editinfo->previous_school}}" placeholder="Previous School" class="input input-bordered w-full max-w-xs" />
              <div class="label">
                @error('previous_school')
                <span class="text-red-500 label-text-alt">{{$message}}</span>
                @enderror
              </div>
            </label>
          </div>
          <div>
            <label class="form-control w-full max-w-xs">
              <div class="label">
                <span class="label-text">School Year</span>
              </div>
              <input type="text" id="previous_school_year" value="{{$editinfo->previous_school_year}}" name="previous_school_year" placeholder="School Year" class="input input-bordered w-full max-w-xs" />
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
              <input type="text" id="average" name="average" value="{{$editinfo->average}}" placeholder="Enter your Average" class="input input-bordered w-full max-w-xs" />
              <div class="label">
                @error('average')
                <span class="text-red-500 label-text-alt">{{$message}}</span>
                @enderror
              </div>
            </label>
          </div>
          <label for="course" class="block mb-2 text-sm font-medium text-gray-900">Choose Course</label>
          <select id="course" name="course" class="border px-3 py-3 rounded-full w-full max-w-xs" value="{{$editinfo->course}}">
            <option value="">Please Choose your Course</option>
            <option value="BSIT">Bachelor of Science in Information Technology</option>
            <option value="BSCRIM">Bachelor of Scinece in Criminology</option>
            <option value="BSHM">Bachelor of Science in Hospitality Management </option>
            <option value="BSA">Bachelor of Science in Accountancy</option>
            <option value="BSEE">Bachelor of Scince in Elementery Education</option>
            <option value="BSED">Bachelor of Science in Secondary Education</option>
          </select>
            @error('course')
            <span class="text-red-500 label-text-alt">{{$message}}</span>
            @enderror
      </div>
            
        {{-- {{route('update', $editinfo->id)}} --}}
        <label for="edit" class="mt-5 btn btn-success">Submit</label>
        <div>
          <input type="checkbox" id="edit" class="modal-toggle" />
          <div class="modal" role="dialog">
            <div class="modal-box">
              <h3 class="font-bold text-lg">Are you sure?</h3>
              <p class="py-4">do you want to update?</p>
              <div class="modal-action">
                <button type="submit"  class="btn">Yes</button>
                <label for="edit" class="btn">No</label>
              </div>
            </div>
          </div>
        </div>
    </form>
  </div>

</x-layout>
