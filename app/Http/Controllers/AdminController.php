<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class AdminController extends Controller
{
   public function login(){
        $login=view('admin.login');
        return view('admin.login')
                ->with('admin_content', $login);
    }
    public function login_check(Request $request)
    {
        $admin_email=$request->email;
        $password=md5($request->password);
        $res=DB::table('tbl_admin')
            ->where('email_address',$admin_email)
            ->where('password',$password)
            ->first();

            

            if($res)
            {
                Session::put('admin_name',$res->admin_name);
                Session::put('admin_id',$res->admin_id);
                return redirect('/admin-dashboard');
            }
            else
            {
                Session::put('login_msg','Incorrect UserName or Password');
                return redirect('/login');
            }
    }
}