<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
        public $entrada, $message, $salida, $genero, $lastName;


    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

 
}
