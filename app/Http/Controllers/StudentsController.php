<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
class StudentsController extends Controller
{
     public function create(Request $request){
         $stu=new Students();
         $stu->name=$request->get('name');
         $stu->courseType=$request->get('courseType');
         $stu->roll_No=$request->get('roll_No');
         $stu->course=$request->get('course');
         $stu->save();

         $student = Students::all();
         return view('viewStudents',compact('student'));
     }
     public function viewStudents()
     {
       $student = Students::all();
       return view('viewStudents',compact('student'));
     }
     public function delete($id)
     {
          $stu = Students::find($id);
          $stu->delete();

          $student = Students::all();
          return view('viewStudents',compact('student'));

     }
     public function find(Request $request)
     {
       $rollNo = $request->get('roll_No');

         $studentData = \App\Students::where('roll_No', '=', $rollNo)->first();
         return view('Online_verify',compact('studentData'));
     }
     public function edit(Request $request, $id){
       $stu = Students::find($id);
       return view('EditStudent', compact('stu','id'));
     }
     public function update($id, Request $request)
     {
       $stu=Students::find($id);
       $stu->name=$request->get('name');
       $stu->courseType=$request->get('courseType');
       $stu->roll_No=$request->get('roll_No');
       $stu->course=$request->get('course');
       $stu->Save();

       $student = Students::all();
       return view('viewStudents',compact('student'));

     }
}
