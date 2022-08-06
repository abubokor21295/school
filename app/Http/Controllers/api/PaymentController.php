<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Payment_details;
use App\Models\Account;



class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(["payments"=> Payment::all()]);
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
        

        $payment=new Payment; 
        $payment->admission_id=$request->cmbStudent;
        $payment->remark=$request->remark;
        $payment->amount=$request->amount;
        $payment->created_at=date("Y-m-d");
        $payment->updated_at=date("Y-m-d");
        $payment->save();

        $last_id=$payment->id;
        $services=$request->services;
        
        forEach($services as $service ){
        $payment_details=new Payment_details;
        $payment_details->payment_id=$last_id;
        $payment_details->service_id=$service["item_id"];;
        $payment_details->fee=$service["fee"];
        $payment_details->qty=$service["qty"];
        $payment_details->created_at=date("Y-m-d");
        $payment_details->save();

        };
        $account=new Account;
        $account->admission_id=$request->cmbStudent;
        $account->amount=$request->amount;
        $account->remark="payment";
        $account->created_at=date("Y-m-d");
        $account->updated_at=date("Y-m-d");
        $account->save();

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
}
