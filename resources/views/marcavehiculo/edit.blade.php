@extends('layouts.default')

@php

$breadcrumbs = array(
    '0' => array('nombre' => 'Inicio', 'link' => '/' , 'active' => ''),
    '1' => array('nombre' => 'Módulo de Marca Vehiculo', 'link' => 'marcavehiculo' , 'active' => ''),
    '2' => array('nombre' => 'Detalle Datos Marca Vehiculo', 'link' => '' , 'active' => true)
);

@endphp

@section('title', 'Detalle Datos Marca Vehiculo')

@section('pageHeader','Detalle Datos Marca Vehiculo')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-inverse">
            <!-- begin panel-heading -->
            <div class="panel-heading">
                <h4 class="panel-title">Datos Marca Vehiculo</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                </div>
            </div>

            <div class="panel-body">
                {!! Form::model($marcavehiculo,['route' => ['marcavehiculo.update',encrypt($marcavehiculo->id)] ,'method' => 'PUT', 'id' => 'form']) !!}

                    @include('marcavehiculo.partials.form')

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
</script>
@endpush
