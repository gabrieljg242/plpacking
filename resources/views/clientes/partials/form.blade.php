<legend class="m-b-15">Datos del Cliente</legend>

<div class="row">
    <div class="col-md-4">

        <div class="row">
            <div class="col-md-12 mb-2">
                <label for="">* Tipo</label>
                <br>
                {!! Form::label('tipo_nacionalidad', 'Nacional') !!}
                {!! Form::radio('tipo_nacionalidad', '1', true) !!}
                {!! Form::label('tipo_nacionalidad', 'Extranjero',['class' =>'ml-3']) !!}
                {!! Form::radio('tipo_nacionalidad', '2') !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mb-2">
                <label for="">* Tipo de Cliente</label>
                <br>
                {!! Form::label('tipo_cliente', 'Empresa Juridíca') !!}
                {!! Form::radio('tipo_cliente', '1', true) !!}
                {!! Form::label('tipo_cliente', 'Persona Natural',['class' =>'ml-3']) !!}
                {!! Form::radio('tipo_cliente', '2') !!}
            </div>
        </div>
       
    </div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-6 mb-2">
                {!! Form::label('razon_social', '* Razón Social / Nombres y Apellidos') !!}
                {!! Form::text('razon_social', null, ['class'=>'form-control', 'placeholder'=>'Razón Social / Nombres y Apellidos...', 'required' => 'required']) !!}
            </div>
            <div class="col-md-6 mb-2">
                {!! Form::label('rubros', '* Rubro') !!}
                {!! Form::text('rubros', null, ['class'=>'form-control', 'placeholder'=>'Rubro...', 'required' => 'required']) !!}
            </div>
            <div class="col-md-6 mb-2">
                {!! Form::label('codigo_cliente', '* Código de Cliente') !!}
                {!! Form::text('codigo_cliente', null, ['class'=>'form-control', 'placeholder'=>'Rubro...', 'required' => 'required']) !!}
            </div>
            <div class="col-md-6 mb-2">
                {!! Form::label('nombre_comercial', '* Nombre Comercial') !!}
                {!! Form::text('nombre_comercial', null, ['class'=>'form-control', 'placeholder'=>'Nombre Comercial...', 'required' => 'required']) !!}
            </div>
             <div class="col-md-6 mb-2">
                {!! Form::label('sector', '* Sector') !!}
                {!! Form::text('sector', null, ['class'=>'form-control', 'placeholder'=>'Sector...', 'required' => 'required']) !!}
            </div>
            <div class="col-md-6 mb-2">
                {!! Form::label('ruc_dni', '* RUC / DNI') !!}
                {!! Form::text('ruc_dni', null, ['class'=>'form-control', 'placeholder'=>'RUC / DNI...', 'required' => 'required']) !!}
            </div>
            <div class="col-md-6 mb-2">
                {!! Form::label('condicion_pago', '* Condición de Pago') !!}
                {{ Form::select('condicion_pago',[15 => '15 Días','30' => '30 Días'], null , ['placeholder'=>'Seleccione...','class' => 'form-control select2','required' => 'required']) }}
            </div>
            <div class="col-md-6 mb-2">
                {!! Form::label('direccion_fiscal', '* Dirección Fiscal') !!}
                {!! Form::text('direccion_fiscal', null, ['class'=>'form-control', 'placeholder'=>'Dirección Fiscal...', 'required' => 'required']) !!}
            </div>
            <div class="col-md-6 mb-2">
                {!! Form::label('alerta_vencimiento', '* Alerta de vencimiento de factura a los') !!}
                {{ Form::select('alerta_vencimiento',[15 => '15 Días','30' => '30 Días'], null , ['placeholder'=>'Seleccione...','class' => 'form-control select2','required' => 'required']) }}
            </div>
            <div class="col-md-6 mb-2">
                {!! Form::label('evaluacion_cliente', '* Evaluación del Cliente') !!}
                {{ Form::select('evaluacion_cliente',[0 => 'Buena',1 => 'Muy buena'], null , ['placeholder'=>'Seleccione...','class' => 'form-control','required' => 'required']) }}
            </div>
        </div>
    </div>
    
</div>
<legend class="mt-4">Datos de Contacto</legend>   
<div class="row">
    <div class="col-md-4 mb-2">
        {!! Form::label('nombre_contacto', '* Nombre de Contacto') !!}
        {!! Form::text('nombre_contacto', null, ['class'=>'form-control', 'placeholder'=>'Nombre de Contacto...', 'required' => 'required']) !!}
    </div>
    <div class="col-md-4 mb-2">
        {!! Form::label('cargo', '* Cargo') !!}
        {!! Form::text('cargo', null, ['class'=>'form-control', 'placeholder'=>'Cargo...', 'required' => 'required']) !!}
    </div>
    <div class="col-md-4 mb-2">
        {!! Form::label('telefono_contacto', '* Central Teléfonica / Teléfono Fijo') !!}
        {!! Form::text('telefono_contacto', null, ['class'=>'form-control', 'placeholder'=>'Central Teléfonica / Teléfono Fijo...', 'required' => 'required']) !!}
    </div>
    <div class="col-md-4 mb-2">
        {!! Form::label('email_contacto', '* Correo Electónico') !!}
        {!! Form::email('email_contacto', null, ['class'=>'form-control', 'placeholder'=>'Correo Electónico...', 'required' => 'required']) !!}
    </div>
    <div class="col-md-4 mb-2">
        {!! Form::label('celular_contacto', '* Teléfono Móvil') !!}
        {!! Form::text('celular_contacto', null, ['class'=>'form-control', 'placeholder'=>'Teléfono Móvil...', 'required' => 'required']) !!}
    </div>
    <div class="col-md-4 mb-2">
        {!! Form::label('fecha_nacimiento', '* Fecha de Cumpleaños / Aniversario') !!}
        {!! Form::date('fecha_nacimiento', null, ['class'=>'form-control', 'placeholder'=>'Fecha de Cumpleaños / Aniversario...', 'required' => 'required']) !!}
    </div>
</div>

@include('includes.component.fields-required')