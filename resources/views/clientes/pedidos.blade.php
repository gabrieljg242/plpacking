@extends('layouts.default')

@section('title', 'Clientes > Pedidos')

@section('pageHeader','Cliente / Pedidos')

@push('css')
	<link href="{{ url('/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
	<link href="{{ url('/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css') }}" rel="stylesheet" />
@endpush

@section('content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">

				<div class="panel panel">
			        <!-- begin panel-heading -->
			        <div class="panel-heading bg-success text-white">
			            <h4 class="panel-title">Historial de pedidos</h4>
			            <div class="panel-heading-btn">
			            	
						</div>
			        </div>

			        <div class="panel-body">
						@include('clientes.partials.listPedidos')
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