@extends('layouts.default')

@php

	$breadcrumbs = array(
		'0' => array('nombre' => 'Inicio', 'link' => '/' , 'active' => ''),
		'1' => array('nombre' => 'Módulo de Almacén', 'link' => '' , 'active' => true)
	);

@endphp

@section('title', 'Módulo de Almacén')

@section('pageHeader','Módulo de Almacén')

@push('css')
	<link href="{{ url('/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
	<link href="{{ url('/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css') }}" rel="stylesheet" />
@endpush

@section('content')
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-inverse">
			        <!-- begin panel-heading -->
			        <div class="panel-heading">
			            <h4 class="panel-title">Lista ingresos materia prima</h4>
			            <div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						</div>
			        </div>

			        <div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								@include('includes.component.message')
								@include('almacen.partials.list')
							</div>
						</div>	

					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
@endsection

@push('scripts')
<script src="{{ url('/assets/plugins/moment/min/moment.min.js') }}"></script>
<script src="{{ url('/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js') }}"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#dtInicio,#dtFin').datepicker({
			todayHighlight: true,
			autoclose: true
		});
	});
</script>
@endpush