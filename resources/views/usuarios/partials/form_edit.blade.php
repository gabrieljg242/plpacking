{!! Form::model($usuario,['method'=>'PUT', 'route'=>['usuarios.update',encrypt($usuario->id)], 'id' => 'form']) !!}
{{ Form::token() }}
<div class="row">
	<div class="col-md-4">
	    <div class="row">
	        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
					{!! Form::label('rol', '* Rol') !!}
					<select class="form-control" name="rol" required>
						<option value="">Seleccione...</option>
						@foreach ($roles as $key => $value)
						@if ($usuario->hasRole($value))
						<option value="{{ $value }}" selected>{{ $value }}</option>
						@else
						<option value="{{ $value }}">{{ $value }}</option>
						@endif
						@endforeach
					</select>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		         <div class="form-group">
		             {!! Form::label('status', 'Estatus') !!}
		             {{ Form::select('status',[1 => 'Activo', 0 => 'Desactivado'], null , ['class' => 'form-control']) }}
		         </div>
		    </div>
	    </div>
  	</div>

  	<div class="col-md-8">
     	<div class="row">

			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					{!! Form::label('name', '* Nombres y apellidos') !!}
					{!! Form::text('name', null, ['class'=>'form-control', 'required' => 'required']) !!}
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		         <div class="form-group">
		             {!! Form::label('telefono', 'Teléfono móvil') !!}
		             {!! Form::text('telefono', null, ['class'=>'form-control', 'value'=>'{{ $usuario->telefono }}', 'placeholder'=>'Teléfono móvil...']) !!}
		         </div>
		    </div>
		    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		         <div class="form-group">
		             {!! Form::label('area_id', '* Área') !!}
					<select class="form-control" name="area_id" required>
						<option value="">Seleccione...</option>
						@foreach ($areas as $key => $area)
						@if ($usuario->area_id == $area->id)
						<option value="{{ $area->id }}" selected>{{ $area->nombre }}</option>
						@else
						<option value="{{ $area->id }}">{{ $area->nombre }}</option>
						@endif
						@endforeach
					</select>
		         </div>
		     </div>
		     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		         <div class="form-group">
		             {!! Form::label('email', 'Correo eléctronico') !!}
		             {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'example@gmail.com...', 'value'=>'{{ $usuario->email }}']) !!}
		         </div>
		     </div>
		     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		         <div class="form-group">
		             {!! Form::label('cargo_id', '* Cargo') !!}
					<select class="form-control" name="cargo_id" required>
						<option value="">Seleccione...</option>
						@foreach ($cargos as $key => $cargo)
						@if ($usuario->cargo_id == $cargo->id)
						<option value="{{ $cargo->id }}" selected>{{ $cargo->nombre }}</option>
						@else
						<option value="{{ $cargo->id }}">{{ $cargo->nombre }}</option>
						@endif
						@endforeach
					</select>
		         </div>
		     </div>
		     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		         <div class="form-group">
		             {!! Form::label('dni', 'DNI') !!}
		             {!! Form::text('dni', null, ['class'=>'form-control', 'placeholder'=>'DNI...']) !!}
		         </div>
		     </div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					{!! Form::label('username', '* Nombre de usuario') !!}
					{!! Form::text('username', null, ['class'=>'form-control', 'value'=>'{{ $usuario->username }}', 'required' => 'required', 'placeholder'=>'Nombre de usuario...']) !!}
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					{!! Form::label('password', 'Nueva Contraseña') !!}
					{!! Form::password('password', ['class'=>'form-control','placeholder'=>'Nueva Contraseña...','autocomplete' => 'false']) !!}
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			    <div class="form-group">
			        {!! Form::label('password', '* Repita Contraseña') !!}
			        <input type="password" data-toggle="password" data-placement="before" class="form-control" type="Contraseña" placeholder="Contraseña" data-rule-equalTo="#password" autocomplete="false" />
			    </div>
			</div>
		</div>
	</div>
	

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="form-group text-center mt-3">
			{{ Form::button(
				'<i class="fa fa-save"></i> Guardar',
				[
				'type' => 'submit',
				'class' => 'btn btn-info btn-sm',
				'data-toggle' => 'tooltip',
				'title' => 'Guardar'
				]
				)}}
				{{ Form::button(
					'<i class="fa fa-close"></i> Cancelar',
					[
					'onclick'=>'history.back()',
					'type' => 'reset',
					'class' => 'btn btn-info btn-sm',
					'data-toggle' => 'tooltip',
					'title' => 'Cancelar'
					]
					)}}
				{{ Form::button(
		        'Limpiar',
		        [
		        'type' => 'reset',
		        'class' => 'btn btn-info btn-sm',
		        'data-toggle' => 'tooltip',
		        'title' => 'Limpiar'
		        ]
		        )}}
				</div>
			</div>
		</div>
		{!! Form::close() !!}

@push('scripts')
<script src="{{ asset('js/validator.js') }}"></script>
<script>
    /** Referencia http://1000hz.github.io/bootstrap-validator/ */
    $('#form').validate()
</script>
@endpush
