<div class="row mb-4">
	<div class="col-md-5"></div>
	<div class="col-md-2">
        
    </div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
					{!! Form::label('name', '* Nombre(s) y apellidos') !!}
					{!! Form::text('name', null, ['class'=>'form-control', 'value'=>'{{ $user->nombre }}', 'required' => 'required']) !!}
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
					{!! Form::label('username', '* Nombre de usuario') !!}
					{!! Form::text('username', null, ['class'=>'form-control', 'value'=>'{{ $user->username }}', 'required' => 'required']) !!}
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					{!! Form::label('password', 'Escribir contraseña') !!}
					{!! Form::password('password', ['class'=>'form-control','placeholder'=>'Nueva Contraseña...','data-toggle' => 'password', 'data-placement' => 'before', 'autocomplete' => 'false']) !!}
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="box-body box-profile mb-3">
                @if(isset($user) && !empty($user->profile_picture))
                    <img src="{{ asset('storage/'.$user->profile_picture) }}" id="imageProfile" class="img-responsive" alt="">
                    <div id="imagePreview"></div>
                @elseif(isset($user) && empty($user->profile_picture))
                    <img src="{{ asset('images/img-not-found.jpg') }}" id="image-not-found" class="img-responsive" alt="">
                    <div id="imagePreview"></div>
                @else
                    <div class="overlay" id="overPreview">
                        <i class="fa fa-refresh fa-spin"></i>
                    </div>
                    <div id="imagePreview"></div>
                @endif
        </div>
		@include('usuarios.partials.image')
	</div>

	@include('includes.component.fields-required')
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<br><br>
		<div class="form-group mt-4 text-center">
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

@push('scripts')
<script src="{{ url('assets/plugins/bootstrap-show-password/dist/bootstrap-show-password.js') }}"></script>
<script src="{{ url('/assets/js/alert-validate.js') }}"></script>

<script>
    $('#form').validate();
</script>
@endpush
