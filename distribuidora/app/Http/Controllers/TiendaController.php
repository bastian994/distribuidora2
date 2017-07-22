<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
USE DB;

class TiendaController extends Controller
{
    public function index()
    {
    	//dd($productos): muestra los productos en la vista
    	//compact('productos') manda el arreglo en el metodo view
    	return view('tienda.index');
    }

    public function show($slug)
    {
    	$producto = Producto::where('slug',$slug)->first();
    	//dd($producto);

    	return view('tienda.show', compact('producto'));
    }

    public function productos()
    {
        $productos = Producto::all();
        //dd($productos);
        //compact('productos') manda el arreglo en el metodo view
        return view('tienda.productos', compact('productos'));
    }

    public function empresa()
    {
        return view('tienda.empresa');
    }
    public function contacto()
    {
        return view('tienda.contacto');
    }
   
}
