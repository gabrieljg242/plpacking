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
                        <div class="col-md-12">
                            <h5><b>GUIAS DE INGRESO MATERIA PRIMA</b></h5>
                            @include('cobranzas.partials.data-factura.materia-prima')
                        </div>
                        
                        <div class="col-md-6">
                            <h4>Datos de procesamiento</h4>
                            <hr>

                        </div>
                        <div class="col-md-6">
                            <h4>Documentos de facturación</h4>
                            <hr>

                        </div>
                    </div>
                    <hr>
                    <h4>Datos y documentos</h4>
                    
                    <div class="row">
                        <div class="col-md-3">
                            <h5><b>Empresa con seguro coberturable</b></h5>
                            <label><input type="radio" name="coberturable"> Si</label>
                            <label class="ml-3"><input type="radio" name="coberturable"> No</label>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5><b>Docuemento garantías</b></h5>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-sm ml-2 text-center" value="garantia.pdf" name="" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <button class="btn pl-btn-secondary btn-sm">Ver</button>
                            <button class="btn pl-btn-secondary btn-sm ml-1">Subir</button>
                            <button class="btn pl-btn-secondary btn-sm ml-1">Eliminar</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                           
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5><b>Seguro cobertura</b></h5>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-sm ml-2 text-center" value="seguro.pdf" name="" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <button class="btn pl-btn-secondary btn-sm">Ver</button>
                            <button class="btn pl-btn-secondary btn-sm ml-1">Subir</button>
                            <button class="btn pl-btn-secondary btn-sm ml-1">Eliminar</button>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5><b>Monto cubertura</b></h5>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-sm ml-2 text-center" value="US$ 10,000.00" name="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5><b>Docuemento garantías</b></h5>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-sm ml-2 text-center" value="OC-Nro_06723.pdf" name="" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <button class="btn pl-btn-secondary btn-sm">Ver</button>
                            <button class="btn pl-btn-secondary btn-sm ml-1">Subir</button>
                            <button class="btn pl-btn-secondary btn-sm ml-1">Eliminar</button>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                           
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5><b>Guía remisión</b></h5>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-sm ml-2 text-center" value="guia_00763.pdf" name="" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <button class="btn pl-btn-secondary btn-sm">Ver</button>
                            <button class="btn pl-btn-secondary btn-sm ml-1">Subir</button>
                            <button class="btn pl-btn-secondary btn-sm ml-1">Eliminar</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <h5><b>Observaciones factura y cliente:</b></h5>
                            <textarea class="form-control" rows="4" cols="50">Se coordinó con el cliente parea cancelación de la factura vencida.</textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
    </div>
</div>  
    
@endsection