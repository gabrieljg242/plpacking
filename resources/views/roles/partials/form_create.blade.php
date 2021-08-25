{!! Form::open(['method'=>'POST', 'url' => 'roles', 'id' => 'form']) !!}
    {{ Form::token() }}
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    {!! Form::label('name', 'Tipo de rol') !!}
                    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre Rol...','required' => 'required']) !!}
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    {!! Form::label('description', 'Descripción del rol') !!}
                    {!! Form::textarea('description', null, ['class'=>'form-control', 'rows' => 2, 'cols' => 40, 'placeholder'=>'Descripción...']) !!}
                </div>
            </div>
            @include('includes.component.fields-required')
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h4>Configurar permisos</h4>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row list-permissions">
                    @php
                        $module = '';
                    @endphp
                    @foreach($permissions as $permission)
                        @if($module == '')
                            @php
                                $module = $permission->module;
                            @endphp
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <h3>{{ $permission->module }}</h3>
                        @elseif($module !== $permission->module)
                            @php
                                $module = $permission->module;
                            @endphp
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <h3>{{ $permission->module }}</h3>
                        @endif

                        <p>{{ Form::checkbox('permissions[]', $permission->name, false) }} {{ $permission->description }}</p>

                        @if ($loop->last)
                            </div>
                        @endif

                    @endforeach
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <br><br>
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
    $('#form').validate()
</script>
@endpush
