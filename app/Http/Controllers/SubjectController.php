<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function index()
    {



        $subjects = Subject::paginate(5);
        return view('pages.erp.subject.index', ['subjects' => $subjects]);
    }
    public function create()
    {

        return view("pages.erp.subject.create");
    }


    public function store(Request $request)
    {
        //		subject::create($request->all());

        $subject = new Subject;
        $subject->name = $request->txtName;
        $subject->sub_code = $request->txtCode;
        $subject->created_at = date("Y-m-d");

        $subject->save();
       
        return back()->with('success', 'Created Successfully.');
    }


    public function destroy(Subject $subject){
		$subject->delete();
		return redirect()->route("subjects.index")->with('success','Deleted Successfully.');
	}


    public function show($id){
		$subject=Subject::find($id);
		return view("pages.erp.subject.show",["subject"=>$subject]);
	}


    public function edit($id){
        $subject=Subject::find($id);
		return view("pages.erp.subject.edit",["subject"=>$subject]);
	}

    public function update(Request $request,Subject $subject){

      
        $subject = new Subject;
       $subject->name = $request->txtName;
        $subject->sub_code = $request->txtCode;
        //echo $name.$code;
		 $subject->updated_at=date("Y-m-d");
		 $subject->created_at=date("Y-m-d");
         $subject->update();
         return redirect()->route("subjects.index")->with('success','Updated Successfully.');
        // if($subject->update()){
        //     return redirect()->route("subjects.index")->with('success','Updated Successfully.');
        // }else{
        //     echo "not ok";
        // }

		 
		
    }


}
