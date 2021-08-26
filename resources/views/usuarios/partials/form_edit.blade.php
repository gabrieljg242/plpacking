{!! Form::model($usuario,['method'=>'PUT', 'enctype' => 'multipart/form-data', 'route'=>['usuarios.update',encrypt($usuario->id)], 'id' => 'form', 'autocomplete' => 'nope']) !!}
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

	    <div class="row mt-3">
	      	<div class="col-md-6">
	            <div class="box-body box-profile">
	              	@if(isset($usuario) && !empty($usuario->profile_picture))
                    	<img src="{{ asset('storage/'.$usuario->profile_picture) }}" id="imageProfile" class="img-responsive" alt="">
                    	<div id="imagePreview"></div>
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
	      	<br>
	  	</div>

	  	<div class="row mt-3">
	    	@include('usuarios.partials.image')
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
					<select class="form-control" name="area_id" id="area_id" onchange="$.getCargos()" required>
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
					<select class="form-control" name="cargo_id" id="cargo_id" required>
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
		</div>
	</div>
	
	@include('includes.component.fields-required')

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="form-group text-center mt-3">
			{{ Form::button(
				'<i class="fa fa-save"></i> Guardar',
				[
				'type' => 'button',
				'class' => 'btn pl-btn-secondary btn-sm validate-submit',
				'data-toggle' => 'tooltip',
				'title' => 'Guardar'
				]
				)}}
				{{ Form::button(
					'<i class="fa fa-close"></i> Cancelar',
					[
					'type' => 'reset',
					'class' => 'btn pl-btn-secondary btn-sm validate-cancel',
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
<script src="{{ url('assets/plugins/bootstrap-show-password/dist/bootstrap-show-password.js') }}"></script>
<script src="{{ url('/assets/js/alert-validate.js') }}"></script>

<script>

    $('#form').validate();

    $(document).ready(function(){

          jQuery.loading = function(loading = true){
            if(loading == true){
              $('#page-loader').removeClass('d-none');
            }else{
              $('#page-loader').addClass('d-none');
            }
          }

          jQuery.getCargos = function(){

            $.loading();
            const idArea = $('#area_id').val();

            $.ajax({
              url: '{{ url("/") }}/area/' + idArea + '/cargos',
              type: 'get',
              dataType: 'json',
              success: function(response){
                if(response.status == 1){
                  $('#cargo_id').html(response.data);
                }else{
                  alert('Error al conectar con el servidor.');
                }
                $.loading(false);
              },
              error: function(){

              }
            });
          }

    });

</script>
@endpush
