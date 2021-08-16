@extends('layouts.default')

@php

    $breadcrumbs = array(
        '0' => array('nombre' => 'Inicio', 'link' => '/' , 'active' => ''),
        '1' => array('nombre' => 'Módulo de Permisos', 'link' => '/permisos' , 'active' => ''),
        '2' => array('nombre' => 'Detalle de Permisos', 'link' => '' , 'active' => true)
    );

@endphp

@section('title', 'Detalle de Permisos')

@section('pageHeader', 'Detalle de Permisos')

@section('content')
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-inverse">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Editar Permiso</h4>
                    <div class="panel-heading-btn">
                       <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                </div>

                <div class="panel-body">
                    @include('permisos.partials.form_edit')				
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
    </div>
</div>  
    
@endsection
