<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //PAGES:
    //HomePage
    public function showHomePage(){
        return view('pages.homepage');
    }
    public function showProfilePage(){
        return view('pages.profile');
    }
    //Create a task
    //Display a list of tasks
    
}
