<div class="row mt-2 mb-3">
	<div class="col-md-3">
		<div class="row">
			<div class="col-md-12 mt-2">
				{!! Form::label('fecha_ingreso', '* Fecha de ingreso materia prima') !!}
                {!! Form::date('fecha_ingreso', (isset($ingreso) ? $ingreso->fecha_ingreso : null) , ['class'=>'form-control', 'placeholder'=>'Fecha de ingreso materia prima...', 'required' => 'required']) !!}
			</div>
			<div class="col-md-12 mt-2">
				{!! Form::label('fecha_proceso', '* Fecha de proceso') !!}
                {!! Form::date('fecha_proceso', (isset($ingreso) ? $ingreso->fecha_proceso : null), ['class'=>'form-control', 'placeholder'=>'Fecha de proceso...', 'required' => 'required']) !!}
			</div>
			<div class="col-md-12 mt-2">
				{!! Form::label('producto_variacion_id', '* Variedad') !!}
     			{{ Form::select('producto_variacion_id',$variaciones, (isset($ingreso) ? $ingreso->producto_variacion_id : null) , ['id' => 'cliente_id', 'placeholder' => 'Seleccione...', 'class' => 'form-control','required' => 'required']) }}
			</div>
			<div class="col-md-12 mt-2">
				{!! Form::label('clp', '* Código producto CLP') !!}
                {!! Form::text('clp', (isset($ingreso) ? $ingreso->placa_vehiculo : null), ['class'=>'form-control', 'placeholder'=>'Código producto CLP...', 'required' => 'required']) !!}
            </div>
			<div class="col-md-12 mt-2">
				{!! Form::label('numero_trazabilidad', '* Número trazabilidad') !!}
                {!! Form::text('numero_trazabilidad', (isset($ingreso) ? $ingreso->numero_trazabilidad : null), ['class'=>'form-control', 'placeholder'=>'Número trazabilidad...', 'required' => 'required']) !!}
			</div>
			<div class="col-md-12 mt-2">
				{!! Form::label('proveedor_id', '* Razón Social PROVEEDOR') !!}
     			{{ Form::select('proveedor_id',$proveedores, (isset($ingreso) ? $ingreso->proveedor_id : null) , ['id' => 'cliente_id', 'placeholder' => 'Seleccione...', 'class' => 'form-control','required' => 'required']) }}
			</div>
			<div class="col-md-12 mt-2">
				{!! Form::label('procedencia_id', '* Procedencia') !!}
     			{{ Form::select('procedencia_id',$procedencias, (isset($ingreso) ? $ingreso->procedencia_id : null) , ['id' => 'cliente_id', 'placeholder' => 'Seleccione...', 'class' => 'form-control','required' => 'required']) }}
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="row">
			<div class="col-md-12 mt-2">
				{!! Form::label('numero_guia', '* Número de guía',['class' => 'text-danger']) !!}
                {!! Form::text('numero_guia', (isset($ingreso) ? $ingreso->numero_guia : null), ['class'=>'form-control', 'placeholder'=>'Número de guía...', 'required' => 'required']) !!}
			</div>
			<div class="col-md-12 mt-2">
				{!! Form::label('numero_jaba', '* Número de jabas') !!}
                {!! Form::number('numero_jaba', (isset($ingreso) ? $ingreso->numero_jaba : null), ['class'=>'form-control', 'placeholder'=>'Número de jabas...', 'required' => 'required']) !!}
			</div>
			<div class="col-md-12 mt-2">
				{!! Form::label('peso_guia', '* Peso guía en Kilos') !!}
                {!! Form::number('peso_guia', (isset($ingreso) ? $ingreso->peso_guia : null), ['id' => 'peso_guia', 'class'=>'form-control', 'placeholder'=>'Peso guía en Kilos...', 'required' => 'required', 'onkeyup' => '$.calcDifPeso()']) !!}
			</div>
			<div class="col-md-12 mt-2">
				{!! Form::label('peso_planta', '* Peso planta en Kilos') !!}
                {!! Form::number('peso_planta', (isset($ingreso) ? $ingreso->peso_planta : null), ['id' => 'peso_planta','class'=>'form-control', 'placeholder'=>'Peso planta en Kilos...', 'required' => 'required', 'onkeyup' => '$.calcDifPeso()']) !!}
			</div>
			<div class="col-md-12 mt-2">
				{!! Form::label('diferencia_peso', '* Diferencia de Peso') !!}
                {!! Form::number('diferencia_peso', (isset($ingreso) ? $ingreso->diferencia_peso : 0), ['id' => 'diferencia_peso','class'=>'form-control', 'placeholder'=>'Diferencia de Peso...', 'required' => 'required','readonly' => 'readonly']) !!}
			</div>
			<div class="col-md-12 mt-2">
				{!! Form::label('porcentage_diferencia', '* Porcentage diferencia de Peso') !!}
                {!! Form::number('porcentage_diferencia', (isset($ingreso) ? $ingreso->porcentage_diferencia : 0), ['id' => 'porcentage_diferencia','class'=>'form-control', 'placeholder'=>'Porcentage diferencia de Peso...', 'required' => 'required','readonly' => 'readonly']) !!}
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="row">
			<div class="col-md-12 mt-2">
				{!! Form::label('marca_vehiculo_id', '* Marca Vehículo') !!}
     			{{ Form::select('marca_vehiculo_id',$marca_veiculos, (isset($ingreso) ? $ingreso->marca_vehiculo_id : null) , ['id' => 'cliente_id', 'placeholder' => 'Seleccione...', 'class' => 'form-control','required' => 'required']) }}
			</div>
			<div class="col-md-12 mt-2">
				{!! Form::label('tipo_veiculo_id', '* Modelo Vehículo') !!}
     			{{ Form::select('tipo_veiculo_id',$tipo_veiculos,  (isset($ingreso) ? $ingreso->tipo_veiculo_id : null) , ['id' => 'cliente_id', 'placeholder' => 'Seleccione...', 'class' => 'form-control','required' => 'required']) }}
			</div>
			<div class="col-md-12 mt-2">
				{!! Form::label('placa_vehiculo', '* Placa de Vehículo') !!}
                {!! Form::text('placa_vehiculo', (isset($ingreso) ? $ingreso->placa_vehiculo : null), ['class'=>'form-control', 'placeholder'=>'Placa de Vehículo...', 'required' => 'required']) !!}
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<legend class="m-b-15">Aprobación del área</legend>
		<hr>
		<h5 class="hide"><u>{{Auth::user()->areas->nombre}}</u></h5>
		@if(isset($ingreso) && $ingreso->id_usuario_aprobacion)
			<div class="row">
				<div class="col-md-6 text-center">
					<h5><u class="mt-2 ml-1">{{ $ingreso->usuario->areas->nombre}}</u></h5>
					{!! Form::checkbox('aprobacion', '1',true) !!} <label class="mt-2 ml-1">{{ $ingreso->usuario->cargos->nombre}}</label>
				</div>
				<div class="col-md-6 text-center">
					<h5><u class="mt-2 ml-1">Fecha</u></h5>
					<label class="mt-2 ml-1">{{ date('d-m-Y h:i:s',strtotime($ingreso->fecha_aprobacion)) }}</label>
				</div>
			</div>
		@else
			{!! Form::checkbox('aprobacion', '1') !!} <label class="mt-2 ml-1">Aprobar</label>
		@endif
		
	</div>
</div>