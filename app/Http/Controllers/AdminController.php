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

    public function edit_category($id){
        $find_category=DB::table('tbl_category')->where('id',$id)->first();
        $add_category=view('admin.pages.edit_category')
                    ->with('find_category',$find_category);
        return view('admin.admin-master')
                ->with('admin_content', $add_category);
    }

     public function update_category(Request $request){
         $category_id=$request->category_id;
        $data=array();
        $data['category_name']=$request->category_name;
        $data['status']=$request->status;
        $data['created_at']=date('Y-m-d H:i:s');
        DB::table('tbl_category')->where('id',$category_id)->update($data);
        return redirect()->back();
    }
     public function delete_category($id){
        DB::table('tbl_category')->where('id',$id)->delete();
        return redirect()->back();
    }

     public function save_blog(Request $request){              
        $data=array();                                           
        $data['blog_title']=$request->blog_title;                   
        $data['category_id']=$request->category_id; 
       // $data['blog_img']=$request->blog_img;            
        $data['short_desc']=$request->short_desc;      
        $data['long_desc']=$request->long_desc;              
        $data['status']=$request->status;               
        $data['created_at']=date('Y-m-d H:i:s');  
        $images = $request->file('blog_img');
        if($request->hasFile('blog_img'))
        {
             $imageName = $images->getClientOriginalName();

        $images->move(public_path('blog_img'),$imageName);

        $data['blog_img']= $imageName;

        DB::table('tbl_blog')->insert($data); 
        }                       
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
        $manage_blog=DB::table('tbl_blog')->get();
        $manage_blog=view('admin.pages.manage_blog')
                           ->with('manage_blog',$manage_blog);
        return view('admin.admin-master')
                ->with('admin_content', $manage_blog);
    }


     public function login(){
        $login=view('admin.login');
        return view('admin.login')
                ->with('admin_content', $login);
    }
    public function add_blog(){ 
        $all_category=DB::table('tbl_category')->get();
        $add_blog=view('admin.pages.add_blog')
        ->with('all_category',$all_category);
        return view('admin.admin-master')
                ->with('admin_content', $add_blog);

    }
        public function admin_adminblog(){
    	$dashboard=view('admin.pages.adminblog');
    	return view('admin.admin-master')
    			->with('admin_content',$dashboard);
    }
}