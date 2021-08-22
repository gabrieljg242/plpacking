{!! Form::model($usuario,['method'=>'PUT', 'enctype' => 'multipart/form-data', 'route'=>['usuarios.update',encrypt($usuario->id)], 'id' => 'form']) !!}
{{ Form::token() }}
<div class="row mb-4">
	<div class="col-md-5"></div>
	<div class="col-md-2">
        <div class="box-body box-profile">
                @if(isset($usuario) && !empty($usuario->profile_picture))
                    <img src="{{ asset('storage/'.$usuario->profile_picture) }}" class="img-responsive" alt="">
                @elseif(isset($usuario) && empty($usuario->profile_picture))
                    <img src="{{ asset('images/img-not-found.jpg') }}" id="image-not-found" class="img-responsive" alt="">
                    <div id="imagePreview"></div>
                @else
                    <div class="overlay" id="overPreview">
                        <i class="fa fa-refresh fa-spin"></i>
                    </div>
                    <div id="imagePreview"></div>
                @endif
        </div>
    </div>
</div>
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
				<div class="form-group">
					{!! Form::label('password', 'Nueva Contraseña') !!}
					{!! Form::password('password', ['class'=>'form-control','placeholder'=>'Nueva Contraseña...','data-toggle' => 'password', 'data-placement' => 'before', 'autocomplete' => 'false']) !!}
				</div>
			</div>

			@include('usuarios.partials.image')

		</div>
	</div>
	

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<br><br>
		<div class="form-group text-center mt-3">
			{{ Form::button(
				'<i class="fa fa-save"></i> Guardar',
				[
				'type' => 'submit',
				'class' => 'btn pl-btn-secondary btn-sm',
				'data-toggle' => 'tooltip',
				'title' => 'Guardar'
				]
				)}}
				{{ Form::button(
					'<i class="fa fa-close"></i> Cancelar',
					[
					'onclick'=>'history.back()',
					'type' => 'reset',
					'class' => 'btn pl-btn-secondary btn-sm',
					'data-toggle' => 'tooltip',
					'title' => 'Cancelar'
					]
					)}}
				{{ Form::button(
		        'Limpiar',
		        [
		        'type' => 'reset',
		        'class' => 'btn pl-btn-secondary btn-sm',
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
<script src="{{ url('assets/plugins/bootstrap-show-password/dist/bootstrap-show-password.js') }}"></script>

<script>
    /** Referencia http://1000hz.github.io/bootstrap-validator/ */
    $('#form').validate()
</script>
@endpush
