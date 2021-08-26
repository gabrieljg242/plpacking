@extends('layouts.default')

@php

    $breadcrumbs = array(
        '0' => array('nombre' => 'Inicio', 'link' => '/' , 'active' => ''),
        '1' => array('nombre' => 'Módulo Roles', 'link' => '/roles' , 'active' => ''),
        '2' => array('nombre' => 'Detalle de Roles', 'link' => '' , 'active' => true)
    );

@endphp

@section('title', 'Detalle Permisos de rol de usuario')

@section('pageHeader', 'Detalle Permisos de rol de usuario')

@section('content')
<div class="spark-screen">
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-inverse">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Configurar permisos de usuario</h4>
                    <div class="panel-heading-btn">
                       <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                </div>

                <div class="panel-body">
                    @include('includes.component.message')
                    @include('roles.partials.form_edit')
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
    </div>
</div>

@endsection
