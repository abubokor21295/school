<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Routin;
use App\Models\Clas;
use App\Models\Section;
use App\Models\Subject;
use App\Models\Department;
use App\Models\Teacher;
use App\Models\Weekday;
use App\Models\Room;



class RoutinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $px;
    function __construct()
    {
        $this->px=DB::getTablePrefix();
    }
    public function index()
    {

       // $routin=DB::select("SELECT * FROM {$this->px}routins group by day_id");

        $routin = DB::table('routins')
        ->select('routins.*', 'weekdays.name as day','clas.name as class','subjects.name as subject','sections.name as section','teachers.name as teacher','rooms.name as room','departments.name as department' )
		->join('weekdays', 'routins.day_id', '=', 'weekdays.id')
		->join('clas', 'routins.class_id', '=', 'clas.id')
		->join('subjects', 'routins.subject_id', '=', 'subjects.id')
		->join('sections', 'routins.section_id', '=', 'sections.id')
		->join('teachers', 'routins.teacher_id', '=', 'teachers.id')
		->join('rooms', 'routins.room_id', '=', 'rooms.id')
		->join('departments', 'routins.department_id', '=', 'departments.id')
		//->groupBy('routins.class_id')
        ->groupBy('routins.class_id')
        ->get();

        
        //$routin = Routin::paginate(10);
        return view('pages.erp.routin.index', ['routins' => $routin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clas = Clas::all();
        $section = Section::all();
        $subject = Subject::all();
        $teacher = Teacher::all();
        $department = Department::all();
        $room = Room::all();
        $weekday = Weekday::all();
        return view("pages.erp.routin.create", ["clas" => $clas,"sections" => $section,"subjects" => $subject,"teachers" => $teacher,"departments" => $department,"rooms" => $room,"weekdays"=> $weekday]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $routin = new Routin;
        $routin->class_id = $request->cmbClassId;
        $routin->section_id = $request->cmbSectionId;
        $routin->room_id = $request->cmbRoomId;
        $routin->department_id = $request->cmbDepardmentId;
        $routin->day_id = $request->cmbDayId;
        $routin->subject_id = $request->cmbSubjectId;
        $routin->teacher_id = $request->cmbTeacherId;
        $routin->start_time = $request->txtStartTime;
        $routin->end_time = $request->txtEndTime;
        $routin->created_at = date("Y-m-d");

        $routin->save();
        return redirect()->route("routins.index")->with('success','Deleted Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $routin = DB::table('routins')
        ->select('routins.*', 'weekdays.name as day','clas.name as class','subjects.name as subject','sections.name as section','teachers.name as teacher','rooms.name as room','departments.name as department' )
		->join('weekdays', 'routins.day_id', '=', 'weekdays.id')
		->join('clas', 'routins.class_id', '=', 'clas.id')
		->join('subjects', 'routins.subject_id', '=', 'subjects.id')
		->join('sections', 'routins.section_id', '=', 'sections.id')
		->join('teachers', 'routins.teacher_id', '=', 'teachers.id')
		->join('rooms', 'routins.room_id', '=', 'rooms.id')
		->join('departments', 'routins.department_id', '=', 'departments.id')
		->where('routins.class_id', '=', $id)
        //->groupBy('routins.day_id')
        ->orderBy('day_id')
        ->orderBy('start_time')
        
        ->get();
        //$routin=DB::select("SELECT * FROM {$this->px}routins where class_id='$id' group by day_id");
        //$routin=Routin::find($id);
		return view("pages.erp.routin.show",["routins"=>$routin]);
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
}
