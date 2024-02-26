<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.course', compact('courses'));
    }

    public function course(){
        // Check for search input
        if (request('search')) {
            $information = Course::where('name', 'like', '%' . request('search') . '%')->paginate();
        } else {
            $information = Course::orderBy('name' ,'asc')->paginate(3);
        }
            // list of students
            return view('courses.course',['info' => $information]);
        }

    public function create()
    {
        return view('courses.create');
    }

    public function edit($id){
        // update form
        $information=Course::findOrfail($id);
        return view('update',['editinfo' => $information]); 
    }

    public function store(Request $request)
    {
        // to add courses
        $validated=$request->validate([
            'title' => 'required',
            'description' => 'nullable',
        ]);
        Course::create([
            // 'fieldNameDatabase' => 'value',
            'title' => $validated['title'],
            'description' => $validated['description'],
        ]);
        session()->flash('success','Successfully added');
        return redirect(route('courses.course'));
    }
   
}


