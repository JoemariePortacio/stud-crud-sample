<?php

namespace App\Http\Controllers;

use App\Models\StudentInformation;
use Illuminate\Http\Request;

class StudController extends Controller
{
    public function home(){
        // list of students
        $information=StudentInformation::all();
        return view('welcome',['info' => $information]);
    }

    public function student(){
            // Check for search input
    if (request('search')) {
        $information = StudentInformation::where('name', 'like', '%' . request('search') . '%')->paginate();
    } else {
        $information = StudentInformation::orderBy('name' ,'asc')->paginate(3);
    }
        // list of students
        return view('student',['info' => $information]);
    }

    public function create(){
        // create form;
        return view('create');
    }

    public function edit($id){
        // update form
        $information=StudentInformation::findOrfail($id);
        return view('update',['editinfo' => $information]); 
    }

    public function addstudent(Request $request){
        // validation for user
        $validated=$request->validate([
            "name" => "required|unique:student_information,name",
            "email" => "required|email|unique:student_information,email",
            "address" => "required",
            "contact" => "required|numeric",
            "status" => "required",
            "previous_school" => "required",
            "previous_school_year" => "required|numeric",
            "average" => "required|numeric",
        ]);
        StudentInformation::create([
            // 'fieldNameDatabase' => 'value',
            'name' => $validated['name'],
            'email' => $validated['email'],
            'address' => $validated['address'],
            'contact' => $validated['contact'],
            'status' => $validated['status'],
            'previous_school' => $validated['previous_school'],
            'previous_school_year' => $validated['previous_school_year'],
            'average' => $validated['average'],
        ]);
        session()->flash('success','Successfully added');
        return redirect(route('student'));
    }


    public function updates(Request $request, $id){
        // update process information
        $validated=$request->validate([
            "name" => "required",
            "email" => "required",
            "address" => "required",
            "contact" => "required",
            "status" => "required",
            "previous_school" => "required",
            "previous_school_year" => "required",
            "average" => "required",
        ]);
        $information=StudentInformation::findOrfail($id);
        $information->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'address' => $validated['address'],
            'contact' => $validated['contact'],
            "status" => $validated['status'],
            'previous_school' => $validated['previous_school'],
            'previous_school_year' => $validated['previous_school_year'],
            'average' => $validated['average'],
        ]);
        session()->flash('success','Successfully Changes');
        return redirect(route('student'));
    }

    public function delete($id){
        $information=StudentInformation::findOrfail($id);
        $information->delete();
        session()->flash('success','Successfully Deleted');
        return redirect(route('student'));
    }
}
