<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function myResult(Request $request){
    //     $section=$request->section;
    //    $exam=$request->exam;
    //    $clas=$request->clas;
    //    $department=$request->department;
       $exam_type=$request->exam_type;
       $admission=$request->admission;


        //echo $section.$subject.$clas;

        $results=DB::select("SELECT r.id, s.name,s.fathers_name,s.mothers_name,s.birth_date, r.exam_id, r.admission_id, r.obt_marks, r.created_at, r.updated_at,sub.name as subjects FROM sch_subjects as sub, sch_results as r, sch_exams as e, sch_students as s, sch_admissions as a where e.subject_id=sub.id and a.id=r.admission_id and s.id=a.student_id and e.id=r.exam_id and e.exam_type_id=$exam_type and r.admission_id=$admission;");


        return json_encode(["results"=>$results]);
    }
    public function ClassResult(Request $request){
         $section=$request->section;
        $subject=$request->subject;
        $clas=$request->clas;
        $department=$request->department;
       $exam_type=$request->exam_type;



        //echo $section.$subject.$clas;

        $results=DB::select("SELECT r.id, stu.name as student, r.admission_id,r.obt_marks,c.name as class, sec.name as section,d.name as department,et.name as examtype FROM sch_admissions as a, sch_students as stu, sch_exam_types as et, sch_results as r, sch_exams as e,sch_clas as c, sch_sections as sec,sch_departments as d where stu.id=a.student_id and a.id=r.admission_id and et.id=e.exam_type_id and sec.id=e.section_id and d.id=e.department_id and c.id=e.class_id and r.exam_id=e.id and e.class_id=$clas and e.section_id=$section and e.subject_id=$subject and e.exam_type_id=$exam_type;");


        return json_encode(["results"=>$results]);
    }
}
