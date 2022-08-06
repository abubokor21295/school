<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clas;

class ClasController extends Controller
{
    public function index()
    {
        //return view('pages.erp.user.index',['id'=>3]);
        $clases = Clas::paginate(10);
        return view('pages.erp.clas.index', ['clases' => $clases]);
    }

    public function create()
    {
        return view("pages.erp.clas.create");
    }

    public function store(Request $request)
    {
        $clas = new Clas;
        $clas->name=$request->txtName;
        $clas->save();

        return back()->with('success', 'Created Successfully.');
    }
    public function destroy(Clas $clas){
		$clas->delete();
		return redirect()->route("clases.index")->with('success','Deleted Successfully.');
	}


    public function show($id){
		$clas=Clas::find($id);
		return view("pages.erp.clas.show",["clas"=>$clas]);
	}

    public function edit(Clas $clas){
        
       return view("pages.erp.clas.edit",["clas"=>$clas]);
   }



}
