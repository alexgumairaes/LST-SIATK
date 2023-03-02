<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
      return view('login.dashboard',[
        'title' => "Pilih versi Login",
      ]);
    }
    
    public function login1() {
      return view('login.login1',[
        'title' => "Login versi 1",
      ]);
    }

    public function login2() {
      return view('login.login2',[
        'title' => "Login versi 2",
      ]);
    }

    public function login3() {
      return view('login.login3',[
        'title' => "Login versi 3",
      ]);
    }
}
