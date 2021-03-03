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
}
