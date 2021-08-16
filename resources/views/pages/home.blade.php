@extends('layouts.default')

@php

	$breadcrumbs = array(
		'0' => array('nombre' => 'Inicio', 'link' => '/' , 'active' => ''),
		'1' => array('nombre' => 'Dashboard', 'link' => '' , 'active' => true)
	);

@endphp

@section('title', 'Home Page')

@push('css')
<style type="text/css">
	.subpanel{
		padding: 10px;
	}

	.widget-stats hr{
		background: #FFF!important;
	}
</style>
@endpush

@section('pageHeader','Dashboard');

@section('content')

	<div class="row">
		<div class="col-md-3">
			<div class="subpanel">
				<h3>Mayo 2020 - Historial ventas</h3>

				@include('pages.partials.widgetStats',[
					'bg'=>'bg-teal',
					'titulo' => 'FACTURAS VENTAS MES',
					'monto' => '10,000.00',
					'subtitulo' => 'Nuevas facturas en ventas',
					'icono' => 'fa fa-globe fa-fw'
				]);

				@include('pages.partials.widgetStats',[
					'bg'=>'bg-teal',
					'titulo' => 'FACTURACIÓN REAL MES',
					'monto' => '9,000.00',
					'subtitulo' => 'Facturas vendidas del mes, anteriores y vencidas hasta hoy',
					'icono' => 'fa fa-globe fa-fw'
				]);

				@include('pages.partials.widgetStats',[
					'bg'=>'bg-teal',
					'titulo' => 'FACTURAS POR COBRAR',
					'monto' => '2,000.00',
					'subtitulo' => 'Facturas por cobrar del mes, anteriores y vencidas hasta hoy',
					'icono' => 'fa fa-globe fa-fw'
				]);
			</div>
		</div>
		<div class="col-md-9">
			<div class="subpanel">
				<h3>Mayo 2020 - Ventas actual</h3>
				<div class="row">
					<div class="col-md-4">
						@include('pages.partials.widgetStats',[
							'bg'=>'bg-blue',
							'titulo' => 'FACTURAS POR COBRAR',
							'monto' => '2,000.00',
							'subtitulo' => 'Facturas por cobrar del mes, anteriores y vencidas hasta hoy',
							'icono' => 'fa fa-dollar-sign fa-fw'
						]);
						@include('pages.partials.widgetStats',[
							'bg'=>'bg-blue',
							'titulo' => 'FACTURAS POR COBRAR',
							'monto' => '2,000.00',
							'subtitulo' => 'Facturas por cobrar del mes, anteriores y vencidas hasta hoy',
							'icono' => 'fa fa-dollar-sign fa-fw'
						]);
						@include('pages.partials.widgetStats',[
							'bg'=>'bg-blue',
							'titulo' => 'FACTURAS POR COBRAR',
							'monto' => '2,000.00',
							'subtitulo' => 'Facturas por cobrar del mes, anteriores y vencidas hasta hoy',
							'icono' => 'fa fa-dollar-sign fa-fw'
						]);
					</div>
					<div class="col-md-4">
						@include('pages.partials.widgetStats',[
							'bg'=>'bg-indigo',
							'titulo' => 'FACTURACIÓN PRESUPUESTADO',
							'monto' => '2,000.00',
							'subtitulo' => 'Meta de facturación del mes',
							'icono' => 'fa fa-archive fa-fw'
						]);
						@include('pages.partials.widgetStats',[
							'bg'=>'bg-indigo',
							'titulo' => 'COBRANZA PRESUPUESTADA',
							'monto' => '2,000.00',
							'subtitulo' => 'Meta de cobranza del mes',
							'icono' => 'fa fa-archive fa-fw'
						]);
						@include('pages.partials.widgetStats',[
							'bg'=>'bg-indigo',
							'titulo' => 'FACTURAS VENCIDAS ACTUAL',
							'monto' => '2,000.00',
							'subtitulo' => 'Monto de todas las facturas vencidas no pagadas hasta hoy',
							'icono' => 'fa fa-archive fa-fw'
						]);
					</div>
					@php 
						$productos = array();
						$productos[] = array(
							'nombre' => 'Producto A',
							'cantidad' => '200'
						);
						$productos[] = array(
							'nombre' => 'Producto B',
							'cantidad' => '200'
						);
						$productos[] = array(
							'nombre' => 'Producto C',
							'cantidad' => '200'
						);
						$productos[] = array(
							'nombre' => 'Producto D',
							'cantidad' => '200'
						);
						$productos[] = array(
							'nombre' => 'Producto E',
							'cantidad' => '200'
						);
						$productos[] = array(
							'nombre' => 'Producto F',
							'cantidad' => '200'
						);
					@endphp
					<div class="col-md-4">
						@include('pages.partials.widgetStatsLg',[
							'bg'=>'bg-dark',
							'titulo' => 'INVETARIO PRODUCTOS',
							'cuerpo' => $productos,
							'subtitulo' => 'Facturas por cobrar del mes, anteriores y vencidas hasta hoy',
							'icono' => 'fa fa-comment-alt fa-fw'
						]);
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="row mt-2">
		<div class="col-md-3">
			<div class="subpanel">
				<h3>Mayo 2020 - Historial ventas</h3>

				@php 
					$clientes = array();
					$clientes[] = array(
						'nombre' => '200',
						'descripcion' => 'Sí cuberturados'
					);
					$clientes[] = array(
						'nombre' => '400',
						'descripcion' => 'No cuberturados'
					);
					$clientes[] = array(
						'nombre' => 'Total',
						'descripcion' => ': 600 clientes'
					);
				@endphp

				@include('pages.partials.widgetStatsLg2',[
					'bg'=>'bg-primary',
					'titulo' => 'INVETARIO PRODUCTOS',
					'cuerpo' => $clientes,
					'subtitulo' => 'Total de clientes actuales de la empresa',
					'icono' => 'fa fa-globe fa-fw',
					'primeraColumna' => '3',
					'segundaColumna' => '7'
				]);

				@php 
					$clientes = array();
					$clientes[] = array(
						'nombre' => 'Zona norte',
						'descripcion' => ': 130'
					);
					$clientes[] = array(
						'nombre' => 'Zona sur',
						'descripcion' => ': 200'
					);
					$clientes[] = array(
						'nombre' => 'Zona oriente',
						'descripcion' => ': 150'
					);
					$clientes[] = array(
						'nombre' => 'Zona centro',
						'descripcion' => ': 120'
					);
					$clientes[] = array(
						'nombre' => 'Total',
						'descripcion' => ': 600 clientes'
					);
				@endphp

				@include('pages.partials.widgetStatsLg2',[
					'bg'=>'bg-primary',
					'titulo' => 'TOTAL DE CLIENTES SEGÚN ZONA',
					'cuerpo' => $clientes,
					'subtitulo' => 'Total clientes distribuido por zona',
					'icono' => 'fa fa-globe fa-fw'
				]);
			</div>
		</div>
		<div class="col-md-9">
			<div class="subpanel">
				<h3>Mayo 2020 - Clientes</h3>
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6">
								@include('pages.partials.widgetStatsLg2',[
									'bg'=>'bg-primary',
									'titulo' => 'NUEVOS CLIENTES MES',
									'cuerpo' => $clientes,
									'subtitulo' => 'Total nuevos clientes del mes',
									'icono' => 'fa fa-globe fa-fw'
								]);
							</div>
							<div class="col-md-6">
								@include('pages.partials.widgetStatsLg2',[
									'bg'=>'bg-indigo',
									'titulo' => 'MOROSIDAD CLIENTES',
									'cuerpo' => $clientes,
									'subtitulo' => 'Clientes con facturas vencidas hasta hoy'
								]);
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								@php 
									$aniversarios = array();
									$aniversarios[] = array(
										'nombre' => '* AGRICOLA SAN MIGUEL DE PIURA',
										'descripcion' => ' 15 MARZO 2021'
									);
									$aniversarios[] = array(
										'nombre' => '* AGRICOLA SAN SEBASTIAN',
										'descripcion' => ' 10 MARZO 2021'
									);
									$aniversarios[] = array(
										'nombre' => 'Total',
										'descripcion' => ': 02 clientes'
									);
							
								@endphp
								@include('pages.partials.widgetStatsLg2',[
									'bg'=>'bg-indigo',
									'titulo' => 'ANIVERSARIOS CLIENTES DEL MES',
									'cuerpo' => $aniversarios,
									'subtitulo' => 'Clientes que cumplen aniversario dentro del mes'
								]);
							</div>
						</div>
					</div>
					<div class="col-md-4">
						@php 
							$clientesNoCuberturados = array();
							$clientesNoCuberturados[] = array(
								'nombre' => 'Cleinte A',
								'descripcion' => ' Hipoteca'
							);
							$clientesNoCuberturados[] = array(
								'nombre' => 'Cleinte B',
								'descripcion' => ' Pagaré'
							);
							$clientesNoCuberturados[] = array(
								'nombre' => 'Cleinte C',
								'descripcion' => ' Letras'
							);
							$clientesNoCuberturados[] = array(
								'nombre' => 'Cleinte D',
								'descripcion' => ' Carta finanzas'
							);
							$clientesNoCuberturados[] = array(
								'nombre' => 'Cleinte E',
								'descripcion' => ' Carta finanzas'
							);
							$clientesNoCuberturados[] = array(
								'nombre' => 'Cleinte F',
								'descripcion' => ' Carta finanzas'
							);
							$clientesNoCuberturados[] = array(
								'nombre' => 'Cleinte G',
								'descripcion' => ' Carta finanzas'
							);
							$clientesNoCuberturados[] = array(
								'nombre' => 'Cleinte H',
								'descripcion' => ' Carta finanzas'
							);
							$clientesNoCuberturados[] = array(
								'nombre' => 'Cleinte I',
								'descripcion' => ': Carta finanzas'
							);
							$clientesNoCuberturados[] = array(
								'nombre' => 'Cleinte J',
								'descripcion' => ': Carta finanzas'
							);
							$clientesNoCuberturados[] = array(
								'nombre' => 'Cleinte K',
								'descripcion' => ': Carta finanzas'
							);
							$clientesNoCuberturados[] = array(
								'nombre' => 'Cleinte L',
								'descripcion' => ': Carta finanzas'
							);
							$clientesNoCuberturados[] = array(
								'nombre' => 'Cleinte M',
								'descripcion' => ': Carta finanzas'
							);
						@endphp

						@include('pages.partials.widgetStatsLg2',[
							'bg'=>'bg-dark',
							'titulo' => 'CLIENTES NO CUBERTURADOS',
							'cuerpo' => $clientesNoCuberturados,
							'subtitulo' => 'Clientes no cuberturados condocumentos de garantías varios'
						]);
					</div>
				</div>
			</div>
		</div>
	</div>



@endsection