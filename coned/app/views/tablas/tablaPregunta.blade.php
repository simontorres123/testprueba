@extends('base.baseAdmin')
@section('css')
	{{HTML::style('packages/bootstrapTable/bootstrap-table.min.css')}}
@stop
@section('titulo')
	Actualización de Clientes
@stop
@section('contenido')
<div class="row">
    <section class="col-md-2"></section>

  
  </div>

  <div>
    <section class="row">
      <section class="col-md-12">

        <table id="tabla-pagos" data-search="true">
          <thead>
            <tr>
              <th data-field="id" data-sortable="true" >#</th>
              <th data-field="nombre" data-sortable="true" align="right">Nombre</th>
              <th data-field="rasgo" data-sortable="true" >rasgo</th>

            </tr>
          </thead>
        </table>
        
      </section>
    </section>

    <section class="row">
      <div class="col-md-12">
        <div class="modal fade" tabindex="-1" id="modal-edicion" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Actualizacion de Información</h4>
              </div>

              <div class="modal-body">  
                <form method="POST", action="/inicio/preguntas" id="frm-update">
                  <input type="hidden" name="id" id="id">
                  <input type="hidden" name="accion" value="update">
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
                  </div> 


                  <form method="POST" action="/inicio/preguntas" id="frm-update">
                    <div class="panel-footer">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="pull-right">
                            <button type="submit" class="btn btn-primary" id="evento-guardar">Guardar</button>

                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </section>

              </div>
              
              <div class="modal-footer">
                                
              </div> 
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      </div>
    </section>

  </div>

@stop
@section('js')
	{{HTML::script('packages/bootstrapTable/bootstrap-table.min.js')}}
    {{HTML::script('packages/bootstrapTable/locale/bootstrap-table-es-MX.js')}}

   <script type="text/javascript">
	    $(function() {
	      var $tabla = $('#tabla-pagos');
	      $tabla.bootstrapTable();
	 		//console.log("----------------");
	      $.ajax({
	        url: '/inicio/preguntas',
	        type: 'POST',
	        dataType: 'json',
	        data: {accion: 'consulta'},
	      })

	      .done(function(response) {
	        $tabla.bootstrapTable('showLoading');
	        if(response.length > 0) {
	          $tabla.bootstrapTable('destroy');
	          $tabla.bootstrapTable({data: response});
	        }
	      })
	      .fail(function(res) {
	        console.log("--------");
	      })
	      .always(function() {
	        //$tabla.bootstrapTable('hideLoading');
	      });

	      $tabla.on('click-row.bs.table', function(row, $element) {
	        console.log($element);
	        $('#modal-edicion').modal('toggle');
	        $('#id').val($element.id);
            $('#nombre').val($element.nombre);
	      });

	      $('#evento-update').on('click', function(evt) {
	        evt.preventDefault();
	        evt.stopPropagation();

	        $('#frm-update').submit();
	      });

	    });


  </script>
@stop