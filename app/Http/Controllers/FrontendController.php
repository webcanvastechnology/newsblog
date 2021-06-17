<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontendController extends Controller
{
     public function home(){
      $all_blog=DB::table('tbl_blog')->get();
    $home=view('frontend.pages.home')
         ->with('all_blog',$all_blog);
   	return view('frontend.master')
   	        ->with('home_content',$home);
   }
     public function all_category(){
    $home=view('frontend.pages.category-list');
   	return view('frontend.master')
   	        ->with('home_content',$home);
   }
   public function contact(){
    $home=view('frontend.pages.contact');
   	return view('frontend.master')
   	        ->with('home_content',$home);
   }
  public function about(){
    
      $home=view('frontend.pages.about');
      return view('frontend.master')
               ->with('home_content',$home);
           }
           public function blog_details($id){
            $find_blog=DB::table('tbl_blog')->where('id',$id)->first();

    
      $home=view('frontend.pages.blogdetails')
      ->with('find_blog',$find_blog);
      return view('frontend.master')
               ->with('home_content',$home);
           }

}
