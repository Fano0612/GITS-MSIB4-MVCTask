<?php

namespace App\Http\Controllers;

use App\Models\student_list;
use Illuminate\Http\Request;

class StudentListController extends Controller
{
    public function index(){
        $student = student_list::all();
        // dd($student);
        return view('student_list',compact('student'));
    }

    // public function addstudent_list(){
    //     return view('addstudent_list');
    // }

    public function insertstudent_list(Request $insertion){
        student_list::create($insertion->all());
        return redirect()->route('student_list')->with('success','Data Successfully Added');
    }

    public function showstudent_list($id){
        $studentdata = student_list::find($id);
        return view('editstudent_list',compact('studentdata'));
    }

    public function editstudent_list(Request $dataupdate, $id){
        $studentdata = student_list::find($id);
        $studentdata->update($dataupdate->all());
        return redirect()->route('student_list')->with('success','Data Successfully Updated');
    }

    public function deletestudent_list($id){
        $studentdatax = student_list::find($id);
        $studentdatax->delete();
        return redirect()->route('student_list')->with('success','Data Successfully Deleted');

    }
}
