@extends('layouts.plantilla')

@section('titulo','Crear Producto')

@section('contenido')



<div class="container">

<h1>Crear Producto</h1>

</div>
<div class="container ml-auto mr-auto flex flex-wrap items-start mt-8">
    <div class="w-full pl-2 pr-2 mb-4 mt-4">
      <h1 class="text-3xl font-extrabold text-center"> Formulario de llenado Producto </h1>
    </div>
  </div>
  <div class="container ml-auto mr-auto flex items-center justify-center">
    <div class="w-full md:w-1/2">
 
      <!-- Formulario -->
      <form class="bg-white px-8 pt-6 pb-8 mb-40" action="{{route('productos.guardar')}}" method="post">
        
        @csrf

        <div class="mb-4">
          <div class="grid grid-flow-row sm:grid-flow-col gap-3">
            <div class="sm:col-span-4 justify-center">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre"> Nombre de producto </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nombre" type="text" placeholder="Leche" required>
            </div>
            <div class="sm:col-span-4 justify-center">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="cantidad"> Cantidad </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="cantidad" type="number" placeholder="10" required>
            </div>
          </div>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="precio">Precio</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                name="precio" 
                type="number" 
                step="0.01"
                placeholder="4.20" 
                required>
        </div>

        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="fecha_entrega"> fecha de entrega </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fecha_entrega" name="fecha_entrega" type="date" placeholder="" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="fecha_exp">Fecha de exp</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                name="fecha_exp" 
                id="fecha_exp" 
                type="date" 
                placeholder="" 
                required>
        </div>

        <div class="flex items-center justify-between">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit"> Aceptar </button>
        </div>
      </form>
 
    </div>
  </div>


@endsection()


@section('js')
<script>
    // Obtener la fecha actual en formato ISO (YYYY-MM-DD)
    var fechaActual = new Date().toISOString().split('T')[0];
    // Establecer la fecha actual como el valor predeterminado del campo de fecha
    document.getElementById('fecha_entrega').value = fechaActual;
</script>

@endsection