<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Gender;

class teacherController extends Controller
{
    public function index()
    {
        //return view('pages.erp.user.index',['id'=>3]);
        $teachers = Teacher::paginate(10);
        return view('pages.erp.teacher.index', ['teachers' => $teachers]);
    }

    public function create()
    {
        $genders = Gender::all();
        return view("pages.erp.teacher.create", ["genders" => $genders]);
    }

    public function store(Request $request)
    {
        //		User::create($request->all());

        $teacher = new Teacher;
        $teacher->name=$request->txtName;
        $teacher->gender=$request->cmbGenderId;
        $teacher->email=$request->txtEmail;
        $teacher->designation=$request->txtDesignation;
        $teacher->phone=$request->txtMobile;
        $teacher->address=$request->txtAddress;
        $teacher->date=$request->dob;
        $teacher->created_at=$request->joining;
        //$teacher->updated_at=date("Y-m-d");
        $teacher->updated_at=date("Y-m-d");
   
   
        if(isset($request->filePhoto)){
          $teacher->photo=$request->filePhoto;
        }
   
        $teacher->updated_at=date("Y-m-d");

        
        if(isset($request->filePhoto)){
            $imageName = $teacher->id.'.'.$request->filePhoto->extension();
            $teacher->photo=$imageName;
            $request->filePhoto->move(public_path('img'),$imageName);
        }
        $teacher->save();
        return back()->with('success', 'Created Successfully.');
    }

    public function destroy(Teacher $teacher){
		$teacher->delete();
		return redirect()->route("teachers.index")->with('success','Deleted Successfully.');
	}


    public function show($id){
		$teacher=Teacher::find($id);
		return view("pages.erp.teacher.show",["teacher"=>$teacher]);
	}

    public function edit(Teacher $teacher){
        $genders=Gender::all();
       return view("pages.erp.teacher.edit",["teacher"=>$teacher,"genders"=>$genders]);
   }
   public function update(Request $request,Teacher $teacher){

    // echo "ok";

     $teacher->name=$request->txtName;
     $teacher->gender=$request->cmbGenderId;
     $teacher->email=$request->txtEmail;
     $teacher->phone=$request->txtMobile;
     $teacher->address=$request->txtAddress;
     $teacher->date=$request->dob;
     $teacher->created_at=$request->joining;
     $teacher->designation=$request->txtDesignation;
     $teacher->updated_at=date("Y-m-d");


     if(isset($request->filePhoto)){
       $teacher->photo=$request->filePhoto;
     }

     $teacher->updated_at=date("Y-m-d");

     if(isset($request->filePhoto)){
         $imageName = $teacher->id.'.'.$request->filePhoto->extension();
         $teacher->photo=$imageName;
         $request->filePhoto->move(public_path('img'),$imageName);
     }
     $teacher->update();
     return redirect()->route("teachers.index")->with('success','Updated Successfully.');
 }

}
