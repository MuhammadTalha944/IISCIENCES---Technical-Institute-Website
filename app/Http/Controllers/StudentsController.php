<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Storage;
use App\Students;
class StudentsController extends Controller
{
     public function addSTU(){
       return view('addStudent');
     }
     public function create(Request $request){
         $stu=new Students();

         $file = Input::file('image');
         $name=$file->getClientOriginalName();
         Storage::put($file->getClientOriginalName(),file_get_contents($file));

         $stu->image=$name;

         $stu->name=$request->get('name');
         $stu->Father_name=$request->get('Father_name');
         $stu->dob=$request->get('dob');
         $stu->gender=$request->get('gender');

         $stu->meritalStatus=$request->get('meritalStatus');
         $stu->cnic=$request->get('cnic');
         $stu->address=$request->get('address');
         $stu->city=$request->get('city');
         $stu->postalCode=$request->get('postalCode');

         $stu->Phone=$request->get('Phone');
         $stu->mobile=$request->get('mobile');
         $stu->email=$request->get('email');

         $stu->yop1=$request->get('yop1');
         $stu->deg1=$request->get('deg1');
         $stu->sub1=$request->get('sub1');
         $stu->Board1=$request->get('Board1');

         $stu->yop2=$request->get('yop2');
         $stu->deg2=$request->get('deg2');
         $stu->sub2=$request->get('sub2');
         $stu->Board2=$request->get('Board2');

         $stu->yop3=$request->get('yop3');
         $stu->deg3=$request->get('deg3');
         $stu->sub3=$request->get('sub3');
         $stu->Board3=$request->get('Board3');

         $stu->yop4=$request->get('yop4');
         $stu->deg4=$request->get('deg4');
         $stu->sub4=$request->get('sub4');
         $stu->Board4=$request->get('Board4');

         $stu->yop5=$request->get('yop5');
         $stu->deg5=$request->get('deg5');
         $stu->sub5=$request->get('sub5');
         $stu->Board5=$request->get('Board5');

         $stu->courseTitle=$request->get('courseTitle');
         $stu->courseType=$request->get('courseType');

         $stu->session=$request->get('session');
         $stu->instituteName=$request->get('instituteName');

         $stu->roll_No=$request->get('roll_No');
         $stu->reg_No=$request->get('reg_No');
         $stu->dateOfReg=$request->get('dateOfReg');

         $stu->completionDate=$request->get('completionDate');

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
       $file = Input::file('image');
       $name=$file->getClientOriginalName();
       Storage::put($file->getClientOriginalName(),file_get_contents($file));

       $stu->image=$name;

       $stu->name=$request->get('name');
       $stu->Father_name=$request->get('Father_name');
       $stu->dob=$request->get('dob');
       $stu->gender=$request->get('gender');

       $stu->meritalStatus=$request->get('meritalStatus');
       $stu->cnic=$request->get('cnic');
       $stu->address=$request->get('address');
       $stu->city=$request->get('city');
       $stu->postalCode=$request->get('postalCode');

       $stu->Phone=$request->get('Phone');
       $stu->mobile=$request->get('mobile');
       $stu->email=$request->get('email');

       $stu->yop1=$request->get('yop1');
       $stu->deg1=$request->get('deg1');
       $stu->sub1=$request->get('sub1');
       $stu->Board1=$request->get('Board1');

       $stu->yop2=$request->get('yop2');
       $stu->deg2=$request->get('deg2');
       $stu->sub2=$request->get('sub2');
       $stu->Board2=$request->get('Board2');

       $stu->yop3=$request->get('yop3');
       $stu->deg3=$request->get('deg3');
       $stu->sub3=$request->get('sub3');
       $stu->Board3=$request->get('Board3');

       $stu->yop4=$request->get('yop4');
       $stu->deg4=$request->get('deg4');
       $stu->sub4=$request->get('sub4');
       $stu->Board4=$request->get('Board4');

       $stu->yop5=$request->get('yop5');
       $stu->deg5=$request->get('deg5');
       $stu->sub5=$request->get('sub5');
       $stu->Board5=$request->get('Board5');

       $stu->courseTitle=$request->get('courseTitle');
       $stu->courseType=$request->get('courseType');

       $stu->session=$request->get('session');
       $stu->instituteName=$request->get('instituteName');

       $stu->roll_No=$request->get('roll_No');
       $stu->reg_No=$request->get('reg_No');
       $stu->dateOfReg=$request->get('dateOfReg');

       $stu->completionDate=$request->get('completionDate');
       $stu->Save();

       $student = Students::all();
       return view('viewStudents',compact('student'));

     }
}
