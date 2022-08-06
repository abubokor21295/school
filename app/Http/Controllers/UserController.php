<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {

        $users = DB::table('users')
        ->select('users.*', 'roles.name' )
		->join('roles', 'users.role_id', '=', 'roles.id')
		
        ->paginate(10);


        //return view('pages.erp.user.index',['id'=>3]);
        //$users = User::paginate(10);
        return view('pages.erp.user.index', ['users' => $users]);
    }
    public function create()
    {
        $roles = Role::all();
        return view("pages.erp.user.create", ["roles" => $roles]);
    }


    public function store(Request $request)
    {
        //		User::create($request->all());

        $user = new User;
        $user->username = $request->txtUsername;
        $user->role_id = $request->cmbRoleId;
        $user->password = $request->txtPassword;


        $user->created_at = date("Y-m-d");
        $user->updated_at = date("Y-m-d");
        if (isset($request->filePhoto)) {
            $user->photo = $request->filePhoto;
        }
        $user->mobile = $request->mobile;

        $user->save();
        if (isset($request->filePhoto)) {
            $imageName = $user->id . '.' . $request->filePhoto->extension();
            $user->photo = $imageName;
            $user->update();
            $request->filePhoto->move(public_path('img'), $imageName);
        }
        return back()->with('success', 'Created Successfully.');
    }


    public function destroy(User $user){
		$user->delete();
		return redirect()->route("users.index")->with('success','Deleted Successfully.');
	}


    public function show($id){
		$user=User::find($id);
		return view("pages.erp.user.show",["user"=>$user]);
	}


    public function edit(User $user){
		 $roles=Role::all();
		return view("pages.erp.user.edit",["user"=>$user,"roles"=>$roles]);
	}

    public function update(Request $request,User $user){

       // echo "ok";

		$user->username=$request->txtUsername;
		$user->role_id=$request->cmbRoleId;
		$user->password=$request->txtPassword;


		if(isset($request->filePhoto)){
		  $user->photo=$request->filePhoto;
		}

		$user->updated_at=date("Y-m-d");

		if(isset($request->filePhoto)){
			$imageName = $user->id.'.'.$request->filePhoto->extension();
			$user->photo=$imageName;
			$request->filePhoto->move(public_path('img'),$imageName);
		}
		$user->update();
		return redirect()->route("users.index")->with('success','Updated Successfully.');
    }


}
