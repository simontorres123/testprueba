@extends('base.baseAdmin')
@section('css')
@stop
@section('titulo')
	Alta de Clientes
@stop
@section('contenido')
	<section class="row">
    <section class="col-md-2"></section>
    <section class="col-md-12">
      <div class="panel panel-success">


        <div class="panel-heading">
          <h3 class="panel-title">Formulario</h3>
        </div>
        <div class="panel-body">

          @if(Session::has('validaciones'))
            <div class="row">
              <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                  <ol>
                    @foreach(Session::get('validaciones') -> all() as $validacion)
                      <li>{{$validacion}}</li>
                    @endforeach
                  </ol>
                </div>
              </div>
            </div>
          @endif

          @if(Session::has('exito'))
            <div class="row">
              <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                  <h1>{{Session::get('exito')}}</h1>
                </div>
              </div>
            </div>
          @endif

          <form action="/vClientes" method="POST" class="form-horizontal" role="form" id="datos-personales">


            <div class="form-group">
              <label for="nombre" class="control-label col-md-2">Nombres:</label>
              <div class="col-md-10">
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre del Cliente"></input>
              </div>
            </div>

            <div class="form-group">
              <label for="apellido_paterno" class="control-label col-md-2">Apellido Paterno:</label>
              <div class="col-md-10">
                <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control" placeholder="Paterno"></input>
              </div>
            </div>
   
   			<div class="form-group">
              <label for="apellido_materno" class="control-label col-md-2">Apellido Materno:</label>
              <div class="col-md-10">
                <input type="text" name="apellido_materno" id="apellido_materno" class="form-control" placeholder="Materno"></input>
              </div>
            </div>

            <div class="form-group">
              <label for="empresa" class="control-label col-md-2">Empresa:</label>
              <div class="col-md-10">
                <input type="text" name="empresa" id="empresa" class="form-control" placeholder="Nombre de la empresa"></input>
              </div>
            </div>
            <div class="form-group">
              <label for="emails" class="control-label col-md-2">Correo:</label>
              <div class="col-md-10">
                <input type="text" name="emails" id="emails" class="form-control" placeholder="Ejemplo@gmail.com"></input>
              </div>
            </div>

            <div class="form-group">
              <label for="telefono" class="control-label col-md-2">Telefono:</label>
              <div class="col-md-10">
                <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Número telefonico"></input>
              </div>
            </div>
            <div class="form-group">
              <label for="nombre" class="control-label col-md-2">Estado</label>
              <div class="col-md-10">
                  <select name="estado_id" class="form-control">
                    @foreach($estados as $estado)
                      <option value="{{$estado->id}}">{{$estado->nombre}}</option>
                    @endforeach
                  </select>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </section>
  </section>
@stop
@section('js')
<script type="text/javascript">
  var $formulario = $('#datos-personales');
  var result_validate = null;

  result_validate = $formulario.validate({
    rules: {  
      nombre: {
        required: true,
        minlength: 2
      },
      apellido_paterno: {
        required: true,
        minlength: 2
      },
      apellido_materno: {
        required: true,
        minlength: 2
      },
      emails: {
        required: true,
        email: true
      },
      empresa: {
        required: true,
        minlength: 
      },
      telefono: {
        required: true
      }
    },

    //Asi se ponen los mensages
   /messages:{
      nombre:{
        required:'Es obligatorio llenar este campo'
      }
    }

  });
</script>

@stop