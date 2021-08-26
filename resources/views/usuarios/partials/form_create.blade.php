{!! Form::open(['method'=>'POST', 'enctype' => 'multipart/form-data', 'url' => 'usuarios', 'id' => 'form', 'autocomplete' => 'nope']) !!}
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
                  <option value="{{ $value }}">{{ $value }}</option>
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
              <img src="{{ asset('images/img-not-found.jpg') }}" id="image-not-found" class="img-responsive" alt="">
              <div id="imagePreview"></div>
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
           {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre...', 'required' => 'required']) !!}
       </div>
   </div>
   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
       <div class="form-group">
           {!! Form::label('telefono', 'Teléfono móvil') !!}
           {!! Form::text('telefono', null, ['class'=>'form-control', 'placeholder'=>'Teléfono móvil...']) !!}
       </div>
   </div>
   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
       <div class="form-group">
           {!! Form::label('area_id', '* Área') !!}
           <select class="form-control" name="area_id" id="area_id" required onchange="$.getCargos()">
            <option value="0">Seleccione...</option>
            @foreach ($areas as $key => $area)
            <option value="{{ $area->id }}">{{ $area->nombre }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
   <div class="form-group">
       {!! Form::label('email', 'Correo eléctronico') !!}
       {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'example@gmail.com...']) !!}
   </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
   <div class="form-group">
       {!! Form::label('cargo_id', '* Cargo') !!}
       <select class="form-control" name="cargo_id" id="cargo_id" required>
        <option value="">Seleccione...</option>
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
       {!! Form::text('username', null, ['class'=>'form-control', 'placeholder'=>'Nombre de usuario...', 'required' => 'required']) !!}
   </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
   <div class="form-group">
       {!! Form::label('password', '* Contraseña') !!}
       {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Contraseña...', 'required' => 'required','data-toggle' => 'password', 'data-placement' => 'before', 'autocomplete' => 'false']) !!}
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
