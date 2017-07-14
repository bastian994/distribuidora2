<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
    	return view('index');
    }
    public function productos()
    {
    	return view('productos');
    }
    public function quienes()
    {
    	return view('quienes');
    }
    public function contacto()
    {
    	return view('contacto');
    }
}
