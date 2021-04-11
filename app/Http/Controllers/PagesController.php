<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        //$title = "Hello There!#@";
        return view('pages.index');
        //return view('pages.index',compact('title));
        //return view('pages.index'->with('title', $title));
    }
    public function about(){
        return view('pages.about');
    }
    public function contactus(){
        return view('pages.contactus');
    }
}
