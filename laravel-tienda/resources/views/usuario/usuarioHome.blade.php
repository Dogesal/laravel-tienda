@extends('layouts.plantilla')

@section('titulo','Usuario Home')


<!-- seccion de css -->
@section('css')

@endsection()
<!-- fin css -->


<!-- seccion de contenido -->
@section('contenido')

<div class="mt-5 text-center text-4xl" >
    <h1>  BIENVENIDO A USUARIOS      </h1>
    
</div>

<div class="container flex mt-12 mb-12 ">

    
        <a href="{{route('usuario.listar')}}">
            <div class="relative flex flex-col mt-6 mx-12 text-gray-700 bg-orange-200 shadow-md bg-clip-border rounded-xl w-96 h-80">
            <div
                    class="relative  mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40 h-48">
                    <img
                    src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                    alt="card-image" />
                </div>
                <div class="p-6">
                    <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                        Usuarios
                    </h5>
                    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                        Lista de usuarios , aca podra ver y modificar los usuarios

                    </p>
                </div>
            </div>  
        </a>

        <a href="{{route('usuario.formulario')}}">
            <div class="relative flex flex-col mt-6 mx-12 text-gray-700 bg-orange-200 shadow-md bg-clip-border rounded-xl w-96 h-80">
                <div
                    class="relative  mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40 h-48">
                    <img
                    src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                    alt="card-image" />
                </div>
                <div class="p-6">
                    <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                    Crear Usuario
                    </h5>
                    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                    Crear Usuario

                    </p>
                </div>
            </div>  
        </a>

        <a href="">
            <div class="relative flex flex-col mt-6 mx-12 text-gray-700 bg-orange-200 shadow-md bg-clip-border rounded-xl w-96 h-80">
                <div
                    class="relative  mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40 h-48">
                    <img
                    src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                    alt="card-image" />
                </div>
                <div class="p-6">
                    <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                    Ingresar productos nuevos
                    </h5>
                    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                    Ingresar productos nuevos

                    </p>
                </div>
            </div>  
        </a>

        <a href="">
            <div class="relative flex flex-col mt-6 mx-12 text-gray-700 bg-orange-200 shadow-md bg-clip-border rounded-xl w-96 h-80">
                <div
                    class="relative  mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40 h-48">
                    <img
                    src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                    alt="card-image" />
                </div>
                <div class="p-6">
                    <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                    Ingresar productos nuevos
                    </h5>
                    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                    Ingresar productos nuevos

                    </p>
                </div>
            </div>  
        </a>

</div>

</div>


@endsection()
<!-- fin contenido -->


<!-- seccion de javascript -->
@section('js')


@endsection
<!-- fin javascript -->