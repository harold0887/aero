<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
        public $entrada, $message, $salida, $genero, $lastName;


    public function index()
    {
        return view('home');
    }

    public function internal()
    {
        return view('internal');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
    public function contactos()
    {
        return view('contactos');
    }
 
}
