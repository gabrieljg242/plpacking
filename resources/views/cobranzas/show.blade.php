@extends('layouts.default')

@section('title', 'Detalle Cobranza Cliente')

@section('pageHeader','Cobranza')

@section('content')
<div class="spark-screen">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Detalle Cobranza Cliente</h4>
                    <div class="panel-heading-btn">
                       
                    </div>
                </div>

                <div class="panel-body">                    
                    @include('cobranzas.partials.data-factura.data-cliente')

                    @include('cobranzas.partials.data-factura.data-factura')

                    @include('cobranzas.partials.data-factura.data-list')
                    
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h5><b>GUIAS DE INGRESO MATERIA PRIMA</b></h5>
                            @include('cobranzas.partials.data-factura.materia-prima')
                        </div>
                        
                        <div class="col-md-6">
                            <h4>Datos de procesamiento</h4>
                            <hr>
                            @include('cobranzas.partials.data-factura.data-procesada')


                        </div>
                        <div class="col-md-6">
                            <h4>Documentos de facturación</h4>
                            <hr>
                            @include('cobranzas.partials.data-factura.documento-facturacion')

                            <h4>Documentos de facturación</h4>
                            <hr>
                            @include('cobranzas.partials.data-factura.factura-procesamiento')

                        </div>
                    </div>
                    <hr>
                    
            <!-- /.box -->

        </div>
    </div>
</div>  
    
@endsection