<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class inventarioController extends Controller
{

    public function home(){

        return view('inventario.inventarioHome');

    }

    public  function formulario(){

        return view('inventario.crearProducto');

    } 

    public  function create(Request $request){

        $producto = new producto();

        $producto->nombre=$request->nombre;
        $producto->cantidad=$request->cantidad;
        $producto->precio=$request->precio;
        $producto->fecha_entrega=$request->fecha_entrega;
        $producto->fecha_exp=$request->fecha_exp;

        $producto->save();

    } 

    public  function delete(){

        return "borrar usuario";

    } 

    public  function update(){

        return "actualizar usuario";

    } 
    public  function data(){

        $producto = producto::get();
        
        return $producto;

    } 

    public  function find($id){

        $producto = producto::find($id);
        
        return $producto;

    } 

    public  function read(){    
        
        return view('inventario.listaProductos');

    } 

}
