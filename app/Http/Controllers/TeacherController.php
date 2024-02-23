<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeacherInformation;

class TeacherController extends Controller
{
    public function teacher(){
            // Check for search input
    if (request('search')) {
        $information = TeacherInformation::where('name', 'like', '%' . request('search') . '%')->paginate();
    } else {
        $information = TeacherInformation::orderBy('name' ,'asc')->paginate(3);
    }
        // list of teachers
        return view('teacher.teacher',['info' => $information]);
    }

    public function add(){
        // create form;
        return view('teacher.create');
    }

    public function edit($id){
        // update form
        $information=TeacherInformation::findOrfail($id);
        return view('teacher.update',['editinfo' => $information]); 
    }

    public function addteacher(Request $request){
        // validation for user
        $validated=$request->validate([
            "name" => "required|unique:teacher_information,name",
            "email" => "required|email|unique:teacher_information,email",
            "address" => "required",
            "contact" => "required|numeric",
            "status" => "required",
            "position" => "required",
        ]);
        TeacherInformation::create([
            // 'fieldNameDatabase' => 'value',
            'name' => $validated['name'],
            'email' => $validated['email'],
            'address' => $validated['address'],
            'contact' => $validated['contact'],
            'status' => $validated['status'],
            'position' => $validated['position'],
        ]);
        session()->flash('success','Successfully added');
        return redirect(route('teacher.home'));
    }


    public function updates(Request $request, $id){
        // update process information
        $validated=$request->validate([
            "name" => "required",
            "email" => "required",
            "address" => "required",
            "contact" => "required",
            "status" => "required",
            "position" => "required",
        ]);
        $information=TeacherInformation::findOrfail($id);
        $information->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'address' => $validated['address'],
            'contact' => $validated['contact'],
            "status" => $validated['status'],
            "position" => $validated['position'],
        ]);
        session()->flash('success','Successfully Changes');
        return redirect(route('teacher.home'));
    }

    public function delete($id){
        $information=TeacherInformation::findOrfail($id);
        $information->delete();
        session()->flash('success','Successfully Deleted');
        return redirect(route('teacher.home'));
    }
}
