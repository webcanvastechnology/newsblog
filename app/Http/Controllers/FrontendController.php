<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
     public function home(){
    $home=view('frontend.pages.home');
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

}
