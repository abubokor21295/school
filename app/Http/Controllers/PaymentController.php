<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;
use App\Models\Student;
use App\Models\Clas;
use App\Models\session;
use App\Models\Service;

class PaymentController extends Controller
{
    public function index()
    {
        $payment = DB::table('payments')
        ->select('payments.*', 'students.name' )
		->join('admissions', 'payments.admission_id', '=', 'admissions.id')
		->join('students', 'admissions.student_id', '=', 'students.id')
        ->orderByDesc('id')
        ->paginate(10);
       // $payment = Payment::paginate(10);
        return view('pages.erp.payment.index', ['payments' => $payment]);
    }
    public function create()
    {
        $clases = Clas::all();
        $student = Student::all();
        $service = Service::all();
        return view("pages.erp.payment.create", ["clases" => $clases,"students"=>$student,"services"=>$service]);
    }
    public function show($id){
       // $payment=Payment::find($id);
        //$admission_id=$payment->admission_id;
        $payment=DB::select("select p.id,p.remark,s.name,c.name as class ,s.phone,a.roll,p.amount,p.created_at,ses.name as sessions,sec.name as section from sch_payments p, sch_admissions a, sch_students s, sch_clas c,sch_sections sec,sch_sessions ses where s.id=a.student_id and p.admission_id=a.id and a.session_id=ses.id and a.class_id=c.id and a.section_id=sec.id and p.id='$id'");
        $details=DB::select("select d.id, d.fee,d.qty, s.name as service from sch_payment_details d, sch_services s where s.id=d.service_id and payment_id='$id'");
       //print_r($details);

  
        return view("pages.erp.payment.show",["payment"=> $payment,"details"=>$details]);

    }
   

}
