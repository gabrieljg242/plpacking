@extends('layouts.default')

@section('title', 'Detalle Cobranza Cliente')

@section('pageHeader','Cobranza')

@section('content')
<div class="container-fluid spark-screen">
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
                    <div class="row mt-2 mb-3">
                        <div class="col-md-4">
                           <h4 class="text-success">AGRICOLA SAN MIGUEL DE PIURA</h4>
                        </div>
                        <div class="col-md-5">
                           <div class="row">
                               <div class="col-md-2">
                                   <label class="mt-2"><b>RUC:</b></label>
                               </div>
                               <div class="col-md-4">
                                   <input type="text" class="form-control" name="" value="012345678911" readonly>
                               </div>
                               <div class="col-md-2">
                                   <label class="mt-2"><b>RUBRO:</b></label>
                               </div>
                               <div class="col-md-4">
                                   <input type="text" class="form-control" name="" value="Agroexportadora" readonly>
                               </div>
                           </div>
                        </div>
                        <div class="col-md-3 text-right">
                            <a href="{{ route('cobranzas.index') }}" class="btn btn-success btn-sm ml-2"><i class="fas fa-angle-left fa-fw"></i> Regresar</a>
                        </div>
                    </div>
                    <h4>Datos de Factura</h4>
                    <hr>
                    <div class="row mt-2 mb-3">
                        <div class="col-md-5" style="border-right: 1px solid;">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5><b>FACTURA: <span class="text-danger">E001-89</span></b></h5>
                                </div>
                                <div class="col-md-6">
                                    <h5><b>MONED:</b> DÓLARES AMERICANOS</h5>
                                </div>
                                <div class="col-md-6 mt-3 ">
                                    <h5><b>FECHA: 28 MARZO 2021</b></h5>
                                </div>
                                <div class="col-md-6 mt-3 ">
                                    <h5><b>VENDEDOR:</b> MARIA DEL CARMEN</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                           <div class="row">
                                <div class="col-md-6 form-inline">
                                    <div class="form-group">
                                        <h5><b>CONDICIÓN DE VENTA:</b></h5>
                                        <input type="text" class="form-control ml-2" value="CRÉDITO A 15 DÍAS" name="" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6 form-inline">
                                    <div class="form-group">
                                        <h5><b>DÍAS VENCIDOS:</b></h5>
                                        <input type="text" class="form-control ml-2 text-danger" value="17 DÍAS" name="" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-2 form-inline">
                                    <div class="form-group">
                                        <h5><b>VENCIMIENTO FACTURA:</b></h5>
                                        <input type="text" class="form-control ml-2" value="28 MARZO 2021" name="" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <table class="table">
                                <thead class="text-center bg-success text-white">
                                    <th width="10%">Item</th>
                                    <th width="10%">Cod. Ped.</th>
                                    <th width="30%">Descripción Producto</th>
                                    <th width="10%">Cantidad</th>
                                    <th width="10%">Precio Unidad</th>
                                    <th width="10%">Sub Total</th>
                                    <th width="10%">18% IGV</th>
                                    <th width="10%">Total con IGV</th>      
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td>01</td>
                                        <td>PED-0057</td>
                                        <td>NUTRIENTE AGRICOLA PREMIUN 289 Y OTROS</td>
                                        <td>500</td>
                                        <td>US$ 3.90</td>
                                        <td>US$ 1,950.00</td>
                                        <td>US$ 351.00</td>
                                        <td>US$ 2,301.00</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><b>500</b></td>
                                        <td><b>------</b></td>
                                        <td><b>US$ 1,950.00</b></td>
                                        <td><b>US$ 351.00</b></td>
                                        <td><b>US$ 2,301.00</b></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><b class="text-danger">Monto cobrado</b></td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm text-success" name="" value="US$ 1,500.00" readonly>
                                        </td>
                                        <td><b>Saldo total a cobrar</b></td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm" name="" value="US$ 4,403.00" readonly>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <h4>Datos y documentos</h4>
                    <hr>
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
                            <button class="btn btn-info btn-sm">Ver</button>
                            <button class="btn btn-info btn-sm ml-1">Subir</button>
                            <button class="btn btn-info btn-sm ml-1">Eliminar</button>
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
                            <button class="btn btn-info btn-sm">Ver</button>
                            <button class="btn btn-info btn-sm ml-1">Subir</button>
                            <button class="btn btn-info btn-sm ml-1">Eliminar</button>
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
                            <button class="btn btn-info btn-sm">Ver</button>
                            <button class="btn btn-info btn-sm ml-1">Subir</button>
                            <button class="btn btn-info btn-sm ml-1">Eliminar</button>
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
                            <button class="btn btn-info btn-sm">Ver</button>
                            <button class="btn btn-info btn-sm ml-1">Subir</button>
                            <button class="btn btn-info btn-sm ml-1">Eliminar</button>
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