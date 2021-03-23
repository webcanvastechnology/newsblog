<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     public function manage_category(){
        $manage_category=view('admin.pages.manage_category');
        return view('admin.admin-master')
                ->with('admin_content', $manage_category);
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