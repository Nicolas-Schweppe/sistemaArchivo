
@extends('menu')

@section('pagina')

<div class="subtitulos"><h2>Archivos <img  src="/iconos/icons/File-earmark-text.svg" alt="" width="20" height="25" title="Bootstrap"></h2></div>
</br>
<div class="container">
    <table id="example"  data-order='[[ 5, "asc" ]]' data-page-length='25'
    class="table table-sm table-striped table-hover table-bordered" >
        <thead  >
      
        	<th style="text-align:center" >Id Archivo</th><th style="text-align:center">Nombre</th><th style="text-align:center">Fecha de Archivo</th><th style="text-align:center">Usuario de carga</th><th style="text-align:center">Tipo</th><th style="text-align:center">fecha de carga</th><th style="text-align:center">Descargar</th><th style="text-align:center">Editar</th>
         
        </thead>
      
          @foreach ($archivo as $item)
         
          <tr>
            <td style="text-align:center">{{$item->idArchivo}}</td>
            <td style="text-align:center">{{$item->nombre}}</td>
            <td style="text-align:center">{{$item->fechaArchivo}}</td>
            <td style="text-align:center">{{$item->idUsuario}}</td>
            <td style="text-align:center">{{$item->tipo}}</td>
            <td style="text-align:center">{{$item->created_at}}</td>
            
            <td style="text-align:center">
                <button  onclick="probar()" class="btn btn-link"><img  src="/iconos/icons/Download.svg" alt="" width="32" height="32" title="Bootstrap"></button>
            </td>
            <td style="text-align:center">
                <button  onclick="editar()" class="btn btn-link"><img  src="/iconos/icons/Pencil.svg" alt="" width="32" height="32" title="Bootstrap"></button>
            </td>
       </tr>
          @endforeach()
    </table>
</div>    
        
        
        <script src="jquery/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            function probar(){
                alert("aca probando boton descargar");
            }
            function editar(){
                alert("aca probando boton editar");
            }

        $(document).ready(function() {
            $('#example').DataTable({
                "columnDefs": [{
                    "targets": 0
                }],
                language: {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Mostrar _MENU_ resultados",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Mostrando resultados _START_-_END_ de  _TOTAL_",
                    "sInfoEmpty": "Mostrando resultados del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sSearch": "Buscar:",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                }
            });
        });
        </script>

@endsection