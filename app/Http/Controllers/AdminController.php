<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function admin_dashboard(){
    	$dashboard=view('admin.pages.dashboard');
    	return view('admin.admin-master')
    			->with('admin_content',$dashboard);
    }

    public function add_category(){
        $add_category=view('admin.pages.add_category');
        return view('admin.admin-master')
                ->with('admin_content', $add_category);
    }

     public function save_category(Request $request){
        $data=array();
        $data['category_name']=$request->category_name;
        $data['status']=$request->status;
        $data['created_at']=date('Y-m-d H:i:s');
        DB::table('tbl_category')->insert($data);
        return redirect()->back();
    }

     public function manage_category(){
        $all_category=DB::table('tbl_category')->get();
        $manage_category=view('admin.pages.manage_category')
                        ->with('all_category',$all_category);
        return view('admin.admin-master')
                ->with('admin_content', $manage_category);
    }

     public function manage_blog(){
        $manage_blog=view('admin.pages.manage_blog');
        return view('admin.admin-master')
                ->with('admin_content', $manage_blog);
    }


     public function login(){
        $login=view('admin.login');
        return view('admin.login')
                ->with('admin_content', $login);
    }
    public function add_blog(){
        $add_blog=view('admin.pages.add_blog');
        return view('admin.admin-master')
                ->with('admin_content', $add_blog);
    }

    public function admin_adminblog(){
    	$dashboard=view('admin.pages.adminblog');
    	return view('admin.admin-master')
    			->with('admin_content',$dashboard);
    }
}