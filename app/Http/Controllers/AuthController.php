<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    private $px;
    function __construct()
    {
        $this->px=DB::getTablePrefix();
    }
    public function signin(Request $f){
        $username=$f->txtUsername;
        $password=$f->txtPassword;
        $email=$f->txtEmail;

        $u=DB::select("select u.id,u.username,u.email,u.role_id,r.name role_name from {$this->px}users u, {$this->px}roles r where r.id=u.role_id and (u.username='$username' or u.email='$email') and u.password='$password'");

        if(count($u)==1){
            $session_id=session()->getId();
            session([
                'sess_id'=>$session_id,
                'sess_user_id'=>$u[0]->id,
                'sess_user_name'=>$u[0]->username,
                'sess_user_email'=>$u[0]->email,
                'sess_role_id'=>$u[0]->role_id,
                'sess_role_name'=>$u[0]->role_name,
            ]);

            return Redirect::route("home");
        }else{
            return redirect("/");
        }

    }

    public function signout(){
        session()->forget(['sess_id', 'sess_user_id','sess_user_name','sess_email','sess_role_name']);
        session()->flush();
        session()->regenerate();  
        return redirect("/");    
      }
}
