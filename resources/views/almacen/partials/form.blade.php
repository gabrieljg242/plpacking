
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                {!! Form::label('cliente_id', '* Cliente') !!}
     			{{ Form::select('cliente_id',$clientes, null , ['id' => 'cliente_id', 'placeholder' => 'Seleccione...', 'class' => 'form-control','required' => 'required', 'onchange' => '$.getCargos()']) }}
            </div>
            <div class="col-md-4">
                {!! Form::label('nombre', 'Código Cliente') !!}
                {!! Form::text('nombre', (isset($ingreso) ? $ingreso->cliente->codigo_cliente : null), ['id' => 'codigo_cliente','class'=>'form-control', 'placeholder'=>'Código Cliente', 'required' => 'required', 'disabled' => 'disabled']) !!}
            </div>
            <div class="col-md-4">
            	{!! Form::label('producto_id', '* Producto') !!}
     			{{ Form::select('producto_id',$productos, null , ['id' => 'producto_id', 'placeholder' => 'Seleccione...', 'class' => 'form-control','required' => 'required', 'onchange' => '$.getForm()']) }}
     		</div>
        </div>
        <div id="result"></div>
    </div>
    
</div>
@include('includes.component.fields-required')