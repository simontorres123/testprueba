@extends('base.baseAdmin')
@section('css')
@stop
@section('titulo')
	Altas de Personal
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

          <form action="/vRegistro" method="POST" class="form-horizontal" role="form" id="datos-personales">


            <div class="form-group">
              <label for="username" class="control-label col-md-2">Usuario:</label>
              <div class="col-md-10">
                <input type="text" name="username" id="username" class="form-control" placeholder="Nombre de Usuario"></input>
              </div>
            </div>

            <div class="form-group">
              <label for="emails" class="control-label col-md-2">Correo:</label>
              <div class="col-md-10">
                <input type="text" name="emails" id="emails" class="form-control" placeholder="ejemplo@gmail.com"></input>
              </div>
            </div>

            <div class="form-group">
              <label for="password" class="control-label col-md-2">Contraseña:</label>
              <div class="col-md-10">
                <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña"></input>
              </div>
            </div>

            <div class="form-group">
              <label for="comprobacion" class="control-label col-md-2">Comprobar:</label>
              <div class="col-md-10">
                <input type="password" name="comprobacion" id="comprobacion" class="form-control" placeholder="Repetir contraseña"></input>
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
@section('contenido2')


@stop
@section('js')
<script type="text/javascript">
  var $formulario = $('#datos-personales');
  var result_validate = null;

  result_validate = $formulario.validate({
    rules: {  
      username: {
        required: true,
        minlength: 2
      },
      emails: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 6
      },
      comprobacion: {
        minlength: 6,
        required: true,
        equalsTo: $('#password')
        
      }
    },

    //Asi se ponen los mensages
   /* messages:{
      nombre:{
        required:'Es obligatorio llenar este campo'
      }
    }*/

  });
</script>
@stop