@extends('layouts.plantilla')

@section('titulo','Crear Usuario')

@section('contenido')


<div class="container">

    <h1>Crear Usuario</h1>

</div>
<div class="container ml-auto mr-auto flex flex-wrap items-start mt-8">
    <div class="w-full pl-2 pr-2 mb-4 mt-4">
        <h1 class="text-3xl font-extrabold text-center"> Formulario de Crear Usuario </h1>
    </div>
</div>
<div class="container ml-auto mr-auto flex items-center justify-center">
    <div class="w-full md:w-1/3">

        <!-- Formulario -->
        <form class="bg-white px-8 pt-6 pb-8 mb-40" action="{{route('usuario.guardar')}}" method="post">

            @csrf

            <div class="sm:col-span-4 justify-center my-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre"> Nombre </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nombre" type="text" placeholder="Alan" required>
            </div>
            <div class="sm:col-span-4 justify-center my-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="correo"> Correo </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="correo" type="mail" placeholder="alan@gmail.com" required>
            </div>


            <div class="sm:col-span-4 justify-center my-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre"> Contraseña </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="contrasenia" type="text" placeholder="aasdsada" required>
            </div>
            <div class="sm:col-span-4 justify-center my-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="cantidad"> Rol </label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        name="rol" 
                        required>
                    <option value="1">Admin</option>
                    <option value="2">Mari</option>
                    <option value="3 " selected>Vendedor</option>
                </select>

            </div>



            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit"> Aceptar </button>
            </div>
        </form>

    </div>
</div>


@endsection()