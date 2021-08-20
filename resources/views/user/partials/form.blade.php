<div class="row mb-4">
	<div class="col-md-5"></div>
	<div class="col-md-2">
        <div class="box-body box-profile">
                @if(isset($user) && !empty($user->profile_picture))
                    <img src="{{ asset('storage/'.$user->profile_picture) }}" class="img-responsive" alt="">
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
    </div>
</div>
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="form-group">
			{!! Form::label('name', '* Nombre y apellido') !!}
			{!! Form::text('name', null, ['class'=>'form-control', 'value'=>'{{ $user->nombre }}', 'required' => 'required']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			{!! Form::label('username', '* Nombre de suaurio') !!}
			{!! Form::text('username', null, ['class'=>'form-control', 'value'=>'{{ $user->username }}', 'required' => 'required']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			{!! Form::label('password', 'Nuevo password') !!}
			{!! Form::password('password', ['class'=>'form-control']) !!}
		</div>
	</div>
	@include('usuarios.partials.image')
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="form-group mt-3 text-center">
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
				</div>
			</div>
		</div>

@push('scripts')
<script src="{{ asset('js/validator.js') }}"></script>
<script>
    /** Referencia http://1000hz.github.io/bootstrap-validator/ */
    $('#form').validator()
</script>
@endpush
