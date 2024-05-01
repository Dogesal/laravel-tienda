@extends('layouts.plantilla')

@section('titulo','Listar Productos')


<!-- seccion de css -->
@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />

@endsection()
<!-- fin css -->


<!-- seccion de contenido -->
@section('contenido')
    <div class="container mx-auto px-4 py-8">
        <table id="tablaProductos" style="background-color:#faedcd" class="w-full  shadow-md rounded-md overflow-hidden">
            <thead style="background-color:#d4a373" >
                <tr>
                    <th>N</th>
                    <th>nombre</th>
                    <th>precio</th>
                    <th>cantidad</th>
                    <th>fecha entrega</th>
                    <th>fecha expira</th>
                    <th>accion</th>
                </tr>
            </thead>
            
        </table>
    </div>
    

@endsection()
<!-- fin contenido -->


<!-- seccion de javascript -->
@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.js"></script>
<script>
        $(document).ready(function() {
            $('#tablaProductos').DataTable( {

                pageLength: 15,
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/2.0.3/i18n/es-ES.json',
                    Paginate: {
                        sNext: ' Siguiente<i class="fas fa-angle-double-right"></i>',
                        sPrevious: '<i class="fas fa-angle-double-left"></i> Antes'
                    }
                },
                lengthChange: false,
                autoWidth: true,
                scrollX: false,
                
                ajax: {
                    url: "{{ route('data.productos') }}",
                    dataSrc: ''
                },
                columns: [
                    { 
                    data: null,
                    render: function(data, type, row, meta) {
                        return meta.row + 1; // Agrega el número de fila incrementado
                    }},
                    { data: 'nombre' },
                    { data: 'precio' },
                    { data: 'cantidad' },
                    { data: 'fecha_entrega' },
                    { data: 'fecha_exp' },
                    { 
                    data: null,
                    render: function(data, type, row, meta) {

                        var idUsu = row.ID;

                        return '<button onclick="" data-toggle="modal" data-target="#" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mr-2" >Modificar</button>' +
                        '<button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded" onclick="masInfoUser(' + idUsu + ')" >Borrar</button>';

                    }
                }
                ]
            }).responsive();
        });
</script>

@endsection
<!-- fin javascript -->