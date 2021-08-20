@extends('layouts.default')

@section('title', 'Cobranzas')

@section('pageHeader','Módulo Cobranzas')

@push('css')
	<link href="{{ url('/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
	<link href="{{ url('/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css') }}" rel="stylesheet" />
@endpush

@section('content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">

				<div class="panel panel-inverse">
			        <!-- begin panel-heading -->
			        <div class="panel-heading">
			            <h4 class="panel-title">Datos de búsqueda</h4>
			            <div class="panel-heading-btn"></h3>

						</div>
			        </div>

			        <div class="panel-body">
						<div class="row">
							<div class="col-md-5">
								<div class="row">
									<label class="col-md-4 mt-2">FACTURACIÓN:</label>
									<div class="col-md-4">
										<input type="text" class="form-control mr-1" id="dtInicio" placeholder="Desde..">
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" id="dtFin" placeholder="Hasta">
									</div>
								</div>
							</div>
							<div class="col-md-7">
								<div class="row">
									<label class="col-md-2 mt-2">COBERTURADO:</label>
									<div class="col-md-4">
										<select class="form-control" name="cobertura" id="cobertura">
											<option>Seleccione...</option>
										</select>
									</div>
									<label class="col-md-2 mt-2">ZONA:</label>
									<div class="col-md-4">
										<select class="form-control" name="cobertura" id="cobertura">
											<option>Seleccione...</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-md-5">
								<div class="row">
									<label class="col-md-6 mt-2"><input type="checkbox" name=""> FACTURAS VENCIDAS</label>
									<label class="col-md-6 mt-2"><input type="checkbox" name=""> MONTOS COBRADOS</label>
								</div>
							</div>
							<div class="col-md-7">
								<div class="row">
									<label class="col-md-3 mt-2">MONTO FACTURADO:</label>
									<div class="col-md-3">
										<input class="form-control" readonly value="US$ 17,300.00">
									</div>
									<label class="col-md-3 mt-2">MONTO COBRADO:</label>
									<div class="col-md-3">
										<input class="form-control" readonly value="US$ 9,80.00">
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-md-7">
								<div class="row">
									<label class="col-md-4 col-form-label">BUSCAR NOMBRE CLIENTE</label>
									<div class="col-md-6">
										<input class="form-control" placeholder="Escribir nombre cliente">
									</div>
									<div class="col-md-2">
										<button class="btn btn-info"><i class="fas fa-search fa-fw"></i> Buscar</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="text-right mb-2">
					<button class="btn btn-success"><i class="fas fa-file-excel fa-fw"></i> Exportar EXCEL</button>
				</div>
				<div class="panel panel">
			        <!-- begin panel-heading -->
			        <div class="panel-heading bg-success text-white">
			            <h4 class="panel-title">Lista de Facturas de Clientes</h4>
			            <div class="panel-heading-btn">
			            	
						</div>
			        </div>

			        <div class="panel-body">
			        	@include('includes.component.message')
						@include('cobranzas.partials.list')
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
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