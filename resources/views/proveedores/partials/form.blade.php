
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6 mb-2">
                {!! Form::label('nombre', '* Razón Social / Nombres y Apellidos') !!}
                {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Razón Social / Nombres y Apellidos...', 'required' => 'required']) !!}
            </div>
        </div>
    </div>
    
</div>
@include('includes.component.fields-required')