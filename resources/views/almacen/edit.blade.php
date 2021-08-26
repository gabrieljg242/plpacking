@extends('layouts.default')

@php

$breadcrumbs = array(
'0' => array('nombre' => 'Inicio', 'link' => '/' , 'active' => ''),
'1' => array('nombre' => 'Módulo de Almacén', 'link' => 'almacen' , 'active' => ''),
'2' => array('nombre' => 'Nuevo ingreso de materia prima', 'link' => '' , 'active' => true)
);

@endphp

@section('title', 'Nuevo ingreso de materia prima')

@section('pageHeader','Nuevo ingreso de materia prima')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-inverse">
            <!-- begin panel-heading -->
            <div class="panel-heading">
                <h4 class="panel-title">Datos de Ingreso</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                </div>
            </div>

            <div class="panel-body">
                {!! Form::model($ingreso,['route' => ['almacen.update',encrypt($ingreso->id)] ,'method' => 'PUT', 'id' => 'form']) !!}

                    @include('almacen.partials.form')

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-center mt-3">
                                  {{ Form::button(
                                    '<i class="fa fa-save"></i> Guardar',
                                    [
                                    'type' => 'button',
                                    'class' => 'btn pl-btn-secondary btn-sm validate-submit',
                                    'data-toggle' => 'tooltip',
                                    'title' => 'Guardar'
                                    ]
                                  )}}
                                  {{ Form::button(
                                    '<i class="fa fa-close"></i> Cancelar',
                                    [
                                    'type' => 'reset',
                                    'class' => 'btn pl-btn-secondary btn-sm validate-cancel',
                                    'data-toggle' => 'tooltip',
                                    'title' => 'Cancelar'
                                    ]
                                    )}}
                                  {{ Form::button(
                                      'Limpiar',
                                      [
                                      'type' => 'reset',
                                      'class' => 'btn pl-btn-secondary btn-sm',
                                      'data-toggle' => 'tooltip',
                                      'title' => 'Limpiar'
                                      ]
                                  )}}
                            </div>
                        </div>
                    </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="{{ url('/assets/js/alert-validate.js') }}"></script>

<script>
  $('#form').validate();


  $(document).ready(function(){

    jQuery.loading = function(loading = true){
      if(loading == true){
        $('#page-loader').removeClass('d-none');
      }else{
        $('#page-loader').addClass('d-none');
      }
    }

    jQuery.getCargos = function(){

      const cliente_id = $('#cliente_id').val();

      if(cliente_id != ''){

        $.loading();

        $.ajax({
          url: '{{ url("/") }}/clientes/' + cliente_id + '/apigetcliente',
          type: 'get',
          dataType: 'json',
          success: function(response){
            if(response.status == 1){
              $('#codigo_cliente').val(response.data.codigo_cliente);
            }else{
              alert('Error al conectar con el servidor.');
            }
            $.loading(false);
          },
          error: function(){
            alert('Error al conectar con el servidor.');
          }
        });

      }else{
        $('#codigo_cliente').val('');
      }

    }

    jQuery.getForm = function(){

      const producto_id = $('#producto_id').val();

      if(producto_id != ''){

        $.loading();

        $.ajax({
              url: '{{ url("/") }}/almacen/' + producto_id + '/{{ (isset($ingreso) ? $ingreso->id : 0 ) }}/apigetformproducto',
              type: 'get',
              dataType: 'json',
              success: function(response){
                if(response.status == 1){
                  $('#result').html(response.data);
                }else{
                  alert('Error al conectar con el servidor.');
                }
                $.loading(false);
              },
              error: function(){
                alert('Error al conectar con el servidor.');
              }
            });

          }else{
            $('#result').html('');
          }
    }

    jQuery.porcDifPeso = function(){
    
      let peso_guia   = $('#peso_guia').val();
      let peso_planta = $('#peso_planta').val();
      peso_guia   = peso_guia != '' && peso_guia > 0 ? peso_guia : 0;
      peso_planta = peso_planta != '' && peso_planta > 0 ? peso_planta : 0;
      const dif   = parseFloat(peso_planta) - parseFloat(peso_guia); 
      const porc  = peso_guia > 0 && peso_guia != '' ? (dif * 100) / peso_guia : 0;

      $('#porcentage_diferencia').val(porc);

    }

    jQuery.calcDifPeso = function(){
      
      let peso_guia   = $('#peso_guia').val();
      let peso_planta = $('#peso_planta').val();
      peso_guia       = peso_guia != '' && peso_guia > 0 ? peso_guia : 0;
      peso_planta     = peso_planta != '' && peso_planta > 0 ? peso_planta : 0;
      const dif       = parseFloat(peso_planta) - parseFloat(peso_guia); 

      $('#diferencia_peso').val(dif);

      $.porcDifPeso();

    }

    $.getForm();
  
  });

</script>
@endpush
