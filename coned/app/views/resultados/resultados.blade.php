@extends('base.baseAdmin')
@section('css')
    {{HTML::style('packages/bootstrapTable/bootstrap-table.min.css')}}
@stop
@section('titulo')
    Actualización de Clientes
@stop
@section('contenido')
    <form id="formulario" role="form" action="/inicio/resultados" method="post">
        <fieldset>
            <div class="form-group">

                <div class="form-group">
                    <label for="clientes" class="control-label col-md-2">Clientes</label>
                    <select name="clientes" class="form-control">
                        @foreach($clientes as $cliente)
                            <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
                        @endforeach
                    </select>

                </div>


            </div>
            <section class="row">
                <section class="col-md-12">

                    <table id="tabla-pagos" data-search="true">
                        <thead>
                        <tr>
                            <th data-field="id" data-sortable="true">#</th>
                            <th data-field="pregunta" data-sortable="true" align="right">Pregunta</th>
                            <th data-field="puntos" data-sortable="true">Puntos</th>
                            <th data-field="resultado" data-sortable="true">Resultado</th>
                            <th data-field="nivel" data-sortable="true">Nivel</th>
                            <th data-field="rasgo" data-soportable="true">Rasgo</th>
                            <th data-field="username" data-soportable="true">Usuario</th>
                        </tr>
                        </thead>
                    </table>

                </section>
            </section>
        </fieldset>
    </form>
    <div>



        @stop
        @section('js')
            {{HTML::script('packages/bootstrapTable/bootstrap-table.min.js')}}
            {{HTML::script('packages/bootstrapTable/locale/bootstrap-table-es-MX.js')}}

            <script type="text/javascript">
                $(function () {
                    var $tabla = $('#tabla-pagos');
                    $tabla.bootstrapTable();
                    $.ajax({
                                url: '/inicio/resultados',
                                type: 'POST',
                                dataType: 'json',
                                data: {accion: 'consulta'},

                            })

                            .done(function (response) {
                                console.log(response);
                                $tabla.bootstrapTable('showLoading');
                                if (response.length > 0) {
                                    $tabla.bootstrapTable('destroy');
                                    $tabla.bootstrapTable({data: response});

                                }
                            })
                            .fail(function (res) {
                                console.log(res);
                            })
                            .always(function () {
                                //$tabla.bootstrapTable('hideLoading');

                            });

                    $tabla.on('click-row.bs.table', function (row, $element) {
                        console.log($element);
                        $('#modal-edicion').modal('toggle');
                        $('#id').val($element.id);
                        $('#empresa').val($element.empresa);
                        $('#nombre').val($element.nombre);
                        $('#emails').val($element.emails);
                        $('#telefono').val($element.telefono);
                    });

                    $('#evento-update').on('click', function (evt) {
                        evt.preventDefault();
                        evt.stopPropagation();

                        $('#frm-update').submit();
                    });

                });


            </script>
@stop