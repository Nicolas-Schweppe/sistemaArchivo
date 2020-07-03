@extends('menu')

@section('pagina')
<div class="subtitulos"><h2>Cargas de Archivo <img  src="/iconos/icons/File-earmark-text.svg" alt="" width="20" height="25" title="Bootstrap"></h2></div>
</br>
</br>
</br>
<div class="formulario">
    <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="nombreArchivo">Nombre del Archivo</label>
            <input type="nombre" class="form-control" id="nombreArchivo" placeholder="Nombre">
          </div>
          <div class="form-group col-md-2">
            <label for="fechaDocumento">Año del Documento</label>
            <input type="date" class="form-control" id="fechaDocumento" >
          </div>
          <div class="form-row">
            <div class="form-group col-md-2">
                <?php $fechaActual = date('d-m-Y');?>
              <label for="fechaCarga">Fecha de Carga</label>
              <input readonly="readonly" class="form-control" id="fechaCarga" value=<?php echo $fechaActual?>>
            </div>
          </div>
        </div>
        <div class="form-group col-md-6">
          <label for="descripcion">Descripcion</label>
          <input type="text" class="form-control" id="Descripcion" placeholder="Descripcion">
        </div>
        <div class="form-group col-md-4">
          <label for="localidad">Localidad de origen</label>
          <input type="text" class="form-control" id="localidad" placeholder="Lugar de origen">
        </div>
        <div class="form-group col-md-2">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
          </div>
        </div>
      </form>
    </div>
@endsection