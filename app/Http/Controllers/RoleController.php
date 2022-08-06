<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        return view('pages.erp.role.index',['id'=>3]);
    }
    public function create(){
        return view('pages.erp.role.create');
    }
    public function store(Request $request){
        echo $request->rolename;
        echo "<br/>";

    }
    public function show(){
        return view('pages.erp.contact');
    }
    public function edit($id){
        return view('pages.erp.role.edit',['id'=>$id]);
    }
    public function update(Request $request,$id){
       echo $id." Updated";
        echo "<br/>";
        echo $request->rolename;
    }
    public function destroy($id){
       echo $id." has been deleted";
    }
}
