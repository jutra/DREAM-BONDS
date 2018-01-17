<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function index()
    {
        return view('home');
    }

    public function faq(){
        return view('faq');
    }

    public function proyectos(){
        return view('proyectos');
    }
    public function perfil(){
        return view('perfil');
    }
    public function error(){
        return view('error');
    }
    public function logout(){
        \Auth::logout();
        return redirect('/');
    }
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }

    public function desvio(){
        return redirect('/perfil');
    }

}
