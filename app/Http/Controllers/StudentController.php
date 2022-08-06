<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Clas;
use App\Models\Gender;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::paginate(10);
        return view('pages.erp.student.index', ['students' => $students]);
    }

    public function show($id){
		$student=Student::find($id);
		return view("pages.erp.student.show",["student"=>$student]);
	}

    public function destroy(Student $student){
		$student->delete();
		return redirect()->route("students.index")->with('success','Deleted Successfully.');
	}

    public function create()
    {
        $clas = Clas::all();
        return view("pages.erp.student.create", ["clases" => $clas]);
    }
    public function store(Request $request)
    {
        //		User::create($request->all());

        
        $student = new Student;
        $student->name=$request->txtName;
        $student->fathers_name=$request->fathers_name;
        $student->mothers_name=$request->mothers_name;
        $student->gender=$request->txtGender;
        $student->email=$request->txtEmail;
        $student->phone=$request->txtMobile;
        $student->address=$request->txtAddress;
        $student->birth_date=$request->birth_date;
        $student->district=$request->District;
        $student->hobby=$request->Hobby;
        $student->created_at=date("Y-m-d");
        $student->updated_at=date("Y-m-d");
   
   
        if(isset($request->filePhoto)){
          $student->photo=$request->filePhoto;
        }
   
        //$student->updated_at=date("Y-m-d");

        
        if(isset($request->filePhoto)){
            $imageName = $student->name.'.'.$request->filePhoto->extension();
            $student->photo=$imageName;
            $request->filePhoto->move(public_path('img/student'),$imageName);
        }
        $student->save();

        return back()->with('success', 'Created Successfully.');
    }


    public function edit(Student $student){
        $genders=Gender::all();
       return view("pages.erp.student.edit",["student"=>$student,"genders"=>$genders]);
   }

   public function update(Request $request, Student $student)
    {
        //		User::create($request->all());

        
        $student = new Student;
        $student->name=$request->txtName;
        $student->fathers_name=$request->fathers_name;
        $student->mothers_name=$request->mothers_name;
        $student->gender=$request->txtGender;
        $student->email=$request->txtEmail;
        $student->phone=$request->txtMobile;
        $student->address=$request->txtAddress;
        $student->birth_date=$request->birth_date;
        $student->district=$request->District;
        $student->hobby=$request->Hobby;
   
   
        if(isset($request->filePhoto)){
          $student->photo=$request->filePhoto;
        }
   
        $student->updated_at=date("Y-m-d");

        
        if(isset($request->filePhoto)){
            $imageName = $student->id.'.'.$request->filePhoto->extension();
            $student->photo=$imageName;
            $request->filePhoto->move(public_path('img/student'),$imageName);
        }
        $student->update();

        return back()->with('success', 'Updated Successfully.');
    }
}
