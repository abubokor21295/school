<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Account;
use App\Models\Student;
use App\Models\Service;


use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = DB::select("select a.id,a.admission_id,sum(a.amount) amount ,a.remark,s.name from sch_accounts a, sch_admissions ad, sch_students s where a.admission_id=ad.id and ad.student_id=s.id group by a.admission_id");
        return view('pages.erp.account.index', ['accounts' => $accounts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$clases = Clas::all();
        $student = Student::all();
        $service = Service::all();
        return view("pages.erp.account.create", ["students"=>$student,"services"=>$service]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $accounts = DB::select("select a.created_at,a.id,a.amount,a.remark,s.name,s.fathers_name,s.mothers_name, s.phone,s.birth_date,ad.photo from sch_accounts a, sch_admissions ad, sch_students s where a.admission_id=ad.id and ad.student_id=s.id and a.admission_id='$id'");
        // $accounts=Account::find($id);
        return view("pages.erp.account.show",["accounts"=>$accounts]);
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
