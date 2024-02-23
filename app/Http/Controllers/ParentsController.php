<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParentsInformation;

class ParentsController extends Controller
    {
        public function parent(){
            // Check for search input
    if (request('search')) {
        $information = ParentsInformation::where('name', 'like', '%' . request('search') . '%')->paginate();
    } else {
        $information = ParentsInformation::orderBy('name' ,'asc')->paginate(3);
    }
        // list of parents
        return view('parents.parent',['info' => $information]);
    }

    public function add(){
        // create form;
        return view('parents.create');
    }

    public function edit($id){
        // update form
        $information=ParentsInformation::findOrfail($id);
        return view('parents.update',['editinfo' => $information]); 
    }

    public function addparent(Request $request){
        // validation for user
        $validated=$request->validate([
            "name" => "required|unique:parents_information,name",
            "email" => "nullable|email|unique:parents_information,email",
            "address" => "required",
            "contact" => "required|numeric",
            "status" => "required",
        ]);
        ParentsInformation::create([
            // 'fieldNameDatabase' => 'value',
            'name' => $validated['name'],
            'email' => $validated['email'],
            'address' => $validated['address'],
            'contact' => $validated['contact'],
            'status' => $validated['status'],
        ]);
        session()->flash('success','Successfully added');
        return redirect(route('parent.home'));
    }


    public function updates(Request $request, $id){
        // update process information
        $validated=$request->validate([
            "name" => "required",
            "email" => "required",
            "address" => "required",
            "contact" => "required",
            "status" => "required",
        ]);
        $information=ParentsInformation::findOrfail($id);
        $information->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'address' => $validated['address'],
            'contact' => $validated['contact'],
            "status" => $validated['status'],
        ]);
        session()->flash('success','Successfully Changes');
        return redirect(route('parent.home'));
    }

    public function delete($id){
        $information=ParentsInformation::findOrfail($id);
        $information->delete();
        session()->flash('success','Successfully Deleted');
        return redirect(route('parent.home'));
    }
}
