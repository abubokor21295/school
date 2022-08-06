<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Bill_details;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
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
        $services=$request->services;
        $account=new Account;
        $account->admission_id=$request->cmbStudent;
        $account->amount=-$request->amount;
        $account->remark="Bill";
        $account->created_at=date("Y-m-d");
        $account->updated_at=date("Y-m-d");
        $account->save();
        $last_id= $account->id;
       // print_r($account);

        forEach($services as $service ){
            $bill_details=new Bill_details;
            $bill_details->account_id=$last_id;
            $bill_details->service_id=$service["item_id"];;
            $bill_details->fee=$service["fee"];
            $bill_details->qty=$service["qty"];
            $bill_details->created_at=date("Y-m-d");
            $bill_details->save();
    
            };
            

        return json_encode(['success'=>'Saved']);
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
    public function myaccount(Request $request){
        $student=$request->student;
        $accounts = DB::select("select ad.id,sum(a.amount) amount,s.name from sch_accounts a, sch_admissions ad, sch_students s where a.admission_id=ad.id and ad.student_id=s.id and a.admission_id=$student group by a.admission_id");
        
        //   $accounts = DB::select("select ad.id,sum(a.amount) amount,s.name from sch_accounts a, sch_admissions ad, sch_students s where a.admission_id=ad.id and ad.student_id=s.id and s.name like '%$student%' group by a.admission_id");


        return json_encode(["accounts"=>$accounts]);
    }
}
