{!! Form::model($permissions,['method'=>'PUT', 'route'=>['permisos.update', encrypt($permissions->id)], 'id' => 'form']) !!}
    {{ Form::token() }}
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    {!! Form::label('name', 'Nombre del Permiso') !!}
                    {!! Form::text('name', null, ['class'=>'form-control', 'value'=>'{{ $permissions->name }}','required' => 'required']) !!}
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    {!! Form::label('module', 'Modulo') !!}
                    {!! Form::text('module', null, ['class'=>'form-control', 'placeholder'=>'Modulo...','required' => 'required']) !!}
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    {!! Form::label('description', 'Descripción') !!}
                    {!! Form::textarea('description', null, ['class'=>'form-control', 'rows' => 2, 'cols' => 40, 'placeholder'=>'Descripción...']) !!}
                </div>
            </div>
            @include('includes.component.fields-required')
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
                <div class="form-group mt-3 text-center">
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
<script src="{{ url('/assets/js/alert-validate.js') }}"></script>

<script>
    $('#form').validate();
</script>
@endpush
