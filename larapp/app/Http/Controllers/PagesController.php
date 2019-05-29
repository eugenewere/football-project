<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title ="wellcome!";
        //return view('pages.index', compact('title')); //pass in single value
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        $data= array(
            'title' => "Services",
            'service' => ['consultancy','typing']
        );
        return view('pages.services')->with($data);
    }
}
