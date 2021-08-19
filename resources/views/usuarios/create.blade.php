@extends('layouts.default')

@php

    $breadcrumbs = array(
        '0' => array('nombre' => 'Inicio', 'link' => '/' , 'active' => ''),
        '1' => array('nombre' => 'Módulo de Usuarios', 'link' => '/usuarios' , 'active' => ''),
        '2' => array('nombre' => 'Detalle Datos de Usuario', 'link' => '' , 'active' => true)
    );

@endphp

@section('title', 'Detalle Datos de Usuario')

@section('pageHeader', 'Detalle Datos de Usuario')

@section('content')
<div class="spark-screen">
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-inverse">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Datos de Usuario</h4>
                    <div class="panel-heading-btn">
                       <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                </div>

                <div class="panel-body">
                    <legend class="m-b-15">Datos Personales</legend>
                    @include('usuarios.partials.form_create')
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
    </div>
</div>

@endsection
