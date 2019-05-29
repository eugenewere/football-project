<?php

namespace App\Http\Controllers;

use Illuminate\Controllers\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
   public function store(request $request){
       //echo "wjoooo";
       $fullname=$request->input('name');
       $email=$request->input('email');
       $password=$request->input('password');
       DB::insert('insert into posts(fullname,email,password) values(?,?,?)',[$fullname,$email,$password]);
      
   }
   public function logs(request $request){
    //echo "wjoooo";
    

    $email=$request->input('email');
    $password=$request->input('password');
    $data=DB::select('select id from posts where email=? and password=?',[$email,$password]);
    
   

    if(count($data)>0){

       
       echo "
        
       <h1 class='text-center' >you are logged in succcesfully</h1>
       ";
       
    }else{
        echo "
        <h1 class='text-center'>wrong password and email</h1> ";
    }
}














}
