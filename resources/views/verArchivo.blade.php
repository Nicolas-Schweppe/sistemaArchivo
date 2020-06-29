
@extends('menu')

@section('pagina')
<div class="container">
    <table id="example"  data-order='[[ 5, "asc" ]]' data-page-length='25'
    class="table table-sm table-striped table-hover table-bordered">
        <thead>
    			<tr style="text-align:center">
         			<th scope="col">Nº Cuotas</th><th scope="col">Monto Cuota</th><th scope="col">estado</th><th scope="col">Anterior Vencimiento</th><th scope="col">Proximo Vencimineto</th><th scope="col">PAGAR</th><th scope="col">Imprimir</th>
    		</thead>
      </br>
        
          <tr>
               <td style="text-align:center">1</td>
               <td style="text-align:center">nombre1</td>
               <td style="text-align:center">nombre2</td>
               <td style="text-align:center">nobre3</td>
               <td style="text-align:center">nombre4</td>
               <td><button  type ="button" id ="agergarPago"  onclick=""><img alt="" src="imagenes/moneda.png" width="45" height="35"></button></td>
               <td><button  type ="button" id ="imprimir"  onclick=""><img alt="" src="imagenes/impresora.jpeg" width="45" height="35"></button></td>
          </tr>
          <tr>
            <td style="text-align:center">2</td>
            <td style="text-align:center">nombre1</td>
            <td style="text-align:center">nombre2</td>
            <td style="text-align:center">nobre3</td>
            <td style="text-align:center">nombre4</td>
            <td><button  type ="button" id ="agergarPago"  onclick=""><img alt="" src="imagenes/moneda.png" width="45" height="35"></button></td>
            <td><button  type ="button" id ="imprimir"  onclick=""><img alt="" src="imagenes/impresora.jpeg" width="45" height="35"></button></td>
       </tr>
       <tr>
        <td style="text-align:center">3</td>
        <td style="text-align:center">nombre1</td>
        <td style="text-align:center">nombre2</td>
        <td style="text-align:center">nobre3</td>
        <td style="text-align:center">nombre4</td>
        <td><button  type ="button" id ="agergarPago"  onclick=""><img alt="" src="imagenes/moneda.png" width="45" height="35"></button></td>
        <td><button  type ="button" id ="imprimir"  onclick=""><img alt="" src="imagenes/impresora.jpeg" width="45" height="35"></button></td>
   </tr>
   <tr>
    <td style="text-align:center">4</td>
    <td style="text-align:center">nombre1</td>
    <td style="text-align:center">nombre2</td>
    <td style="text-align:center">nobre3</td>
    <td style="text-align:center">nombre4</td>
    <td><button  type ="button" id ="agergarPago"  onclick=""><img alt="" src="imagenes/moneda.png" width="45" height="35"></button></td>
    <td><button  type ="button" id ="imprimir"  onclick=""><img alt="" src="imagenes/impresora.jpeg" width="45" height="35"></button></td>
</tr>
<tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">nombre1</td>
    <td style="text-align:center">nombre2</td>
    <td style="text-align:center">nobre3</td>
    <td style="text-align:center">nombre4</td>
    <td><button  type ="button" id ="agergarPago"  onclick=""><img alt="" src="imagenes/moneda.png" width="45" height="35"></button></td>
    <td><button  type ="button" id ="imprimir"  onclick=""><img alt="" src="imagenes/impresora.jpeg" width="45" height="35"></button></td>
</tr>

    </table>
</div>    
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script>/* 
        $(document).ready(function() {
        $('#example').DataTable();
        } ); */
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