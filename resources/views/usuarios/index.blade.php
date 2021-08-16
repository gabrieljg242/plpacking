@extends('layouts.default')

@php

    $breadcrumbs = array(
        '0' => array('nombre' => 'Inicio', 'link' => '/' , 'active' => ''),
        '1' => array('nombre' => 'Módulo de Usuarios', 'link' => '' , 'active' => true)
    );

@endphp

@section('title', 'Módulo de Usuarios')

@section('pageHeader', 'Módulo de Usuarios')

@section('content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">

				<div class="panel panel-inverse">
			        <!-- begin panel-heading -->
			        <div class="panel-heading">
			            <h4 class="panel-title">Lista de Usuarios en el Sistema</h4>
			            <div class="panel-heading-btn">
			               <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
			            </div>
			        </div>

			        <div class="panel-body">

			        	 @can('user.create')
			        	 	<div class="row mb-3">
			        	 		<div class="col-md-12 text-right">
			        	 			<a href="{{ url('usuarios/create') }}">
										{{ Form::button(
											'<i class="fa fa-plus"></i> Nuevo Usuario',
												[
													'type' => 'submit',
													'class' => 'btn btn-success btn-sm',
													'data-toggle' => 'tooltip',
													'title' => 'Nuevo'
												]
										)}}
									</a>
			        	 		</div>
			        	 	</div>
						@endcan

						@include('usuarios.partials.list')
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>
@endsection
