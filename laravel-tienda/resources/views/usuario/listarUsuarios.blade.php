@extends('layouts.plantilla')

@section('titulo','Listar Usuarios')


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
   <!-- tabla de usuarios -->
    <div class="container mx-auto px-4 py-8">
        <table id="tablaUsuarios" style="background-color:#faedcd" class="w-full  shadow-md rounded-md overflow-hidden">
            <thead style="background-color:#d4a373" >
                <tr>
                    <th>N</th>
                    <th>nombre</th>
                    <th>correo</th>
                    <th>rol</th>
                    <th>accion</th>
                </tr>
            </thead>
            
        </table>
    </div>
   <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  Toggle modal
</button> 
    <!-- modal usuario -->
 <!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Terms of Service
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
            </div>
        </div>
    </div>
</div>





@endsection()
<!-- fin contenido -->


<!-- seccion de javascript -->
@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script>
        $(document).ready(function() {
            $('#tablaUsuarios').DataTable( {
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
                    url: "{{ route('data.usuarios') }}",
                    dataSrc: ''
                },
                columns: [
                    { 
                    data: null,
                    render: function(data, type, row, meta) {
                        return meta.row + 1; // Agrega el número de fila incrementado
                    }
                    },
                    { data: 'nombre' },
                    { data: 'correo' },
                    { data : "rol", 
                        "render": function(data) {
                            switch(data) {
                                case "1":
                                    return 'admin';
                                case "2":
                                    return 'mari';
                                case "3":
                                    return 'vendedor';
                                default:
                                    return '';
                            }
                        }
                    },
                    { 
                        
                    data: null,
                    render: function(data, type, row, meta) {
                        var idUsu = row.ID;

                        return '<button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button"> Toggle modal</button>'+
                           '<a href="includes/usersidebar/actualizar_perfil.php?id_eliminar=' + row.id_user + '">' +
                           '<button type="button" class="btn btn-quitar"><i class="fas fa-trash-alt"></i></button>' +
                           '</a>' +
                           '</div>' +
                           '</td>';

                    }
                }
                ]
            }).responsive();
        });
</script>
<script>
    function masInfoUser(x) {
            
        }
</script>
@endsection
<!-- fin javascript -->