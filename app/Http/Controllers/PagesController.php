<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function getHome()
    {
        return view('home');
    }

    public function getProfile(){
      return view ('profile');
    }

    public function getHistory(){
      return view ('history');
    }

    public function getCamera(){
      return view ('camera');
    }
}
