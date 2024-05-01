<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\inventarioController;
use App\Http\Controllers\proveedoresController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuarioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', homeController::class);

Route::controller( usuarioController::class)->group(function(){

    //views
    Route::get('usuario/homeUsuario','home')->name('usuario.home');
    Route::get('usuario/crearUsuario', 'formulario')->name('usuario.formulario');
    Route::get('usuario/dataUsuarios', 'data')->name('data.usuarios');
    Route::get('usuario/listarUsuarios', 'read')->name('usuario.listar');
    
    //apis
    Route::post('usuario/crear', 'create')->name('usuario.guardar');
    Route::put('usuario/{id}/edit', 'update')->name('usuario.actualizar');
    Route::get('usuario/{id}','find')->name('usuario.datos');
    Route::delete('usuario/{id}', 'destroy')->name('usuario.borrar');
});


Route::controller( inventarioController::class)->group(function(){

    //views
    Route::get('inventario/homeInventario','home')->name('Inventario.home');
    Route::get('inventario/crearProducto', 'formulario')->name('productos.formulario');
    Route::get('inventario/listarProductos', 'read')->name('productos.listar');
    Route::get('inventario/dataProductos', 'data')->name('data.productos');
    

    //apis
    Route::post('inventario/crearInventario', 'create')->name('productos.guardar');
    Route::put('inventario/{id}/edit', 'update')->name('productos.actualizar');
    Route::get('inventario/{id}','find')->name('productos.datos');
    Route::delete('inventario/{id}', 'destroy')->name('productos.borrar');
});

Route::controller( proveedoresController::class)->group(function(){

    Route::get('/crearProveedor', 'create');
    Route::post('/borrarProveedor', 'delete');
    Route::get('/actualizarProveedor', 'update');
    Route::get('/dataProveedores', 'data')->name('data.proveedores');
    Route::get('/listarProveedores', 'read');

});