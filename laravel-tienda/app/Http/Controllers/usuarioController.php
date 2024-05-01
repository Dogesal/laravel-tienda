<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
    public  function home(){

        return view('usuario.usuarioHome');

    } 

    public  function formulario(){

        return view('usuario.crearUsuario');

    } 

     public  function create(Request $request){

        $usuario = new usuario();

        $usuario->nombre=$request->nombre;
        $usuario->correo=$request->correo;
        $usuario->contrasenia=$request->contrasenia;
        $usuario->rol=$request->rol;

        $usuario->save();

    } 
    public  function find($id){

        $usuario = usuario::findOrFail($id);
        
        return $usuario;

    } 

    public  function update($curso){

        $usuario = usuario::find($curso);
        
        return $usuario;

    } 
    public  function delete($id){

        $usuario = usuario::find($id);
        $usuario->delete();
        return redirect()->route('posts.index')
      ->with('success', 'Post deleted successfully');

    } 
    public  function data(){

        $usuarios = usuario::get();
        
        return $usuarios;

    } 

    public  function read(){    
        
        return view('usuario.listarUsuarios');

    } 

}
