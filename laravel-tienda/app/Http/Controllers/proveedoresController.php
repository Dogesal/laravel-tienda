<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class proveedoresController extends Controller
{
    public  function create(){

        return view('proovedor.crearProveedor');

    } 

    public  function delete(){

        return "borrar usuario";

    } 

    public  function update(){

        return "actualizar usuario";

    } 
    public  function data(){

        

    } 

    public  function read(){    
        
        return view('proveedor.listarUsuarios');

    } 
}
