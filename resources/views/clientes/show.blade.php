@extends('layouts.default')

@php

$breadcrumbs = array(
    '0' => array('nombre' => 'Inicio', 'link' => '/' , 'active' => ''),
    '1' => array('nombre' => 'Módulo de Clientes', 'link' => 'clientes' , 'active' => ''),
    '2' => array('nombre' => 'Detalle Datos CLiente', 'link' => '' , 'active' => true)
);

@endphp

@section('title', 'Detalle Datos CLiente')

@section('pageHeader','Detalle Datos CLiente')

@section('content')
<div class="spark-screen">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Datos Cliente</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row mt-2 mb-3">
                        <div class="col-md-12 text-right">
                            <a href="{{ route('clientes.pedidos', encrypt(1)) }}" class="btn btn-success btn-sm ml-2">Historial procesamientos</i></a>
                        </div>
                    </div>
                    <legend class="m-b-15">Datos del Cliente</legend>
                    <div class="row">
                        <div class="col-md-4">
                           <h6>Tipo</h6>
                           <label for="nacional" class="mr-3"><input type="radio" id="nacional" name="tipo"> Nacional </label>
                           <label for="extranjero"><input type="radio" id="extranjero" name="tipo"> Extranjero</label>

                           <h6 class="mt-2">Tipo de Cliente</h6>
                           <label for="personaJuridica" class="mr-3"><input type="radio" id="personaJuridica" name="tipo"> Empresa Juridíca</label>
                           <label for="personaNatural" class="mr-3"><input type="radio" id="personaNatural" name="tipo"> Persona Natural</label>

                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label>Razón Social / Nombres y Apellidos</label>
                                    <input class="form-control" readonly value="AGRICOLA SAN MIGUEL DE PIURA"/>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label>Rubro</label>
                                    <input class="form-control" readonly value="AGROINDUSTRIA"/>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label>Nombre Comercial</label>
                                    <input class="form-control" readonly value="AGRICOLA SAN MIGUEL DE PIURA"/>
                                </div>
                                 <div class="col-md-6 mb-2">
                                    <label>Sector</label>
                                    <input class="form-control" readonly value="AGROEXPORTADOR EXPARRAGOS"/>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label>RUC / DNI</label>
                                    <input class="form-control" readonly value="20609865345"/>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label>Condición de Pago</label>
                                    <select class="form-control">
                                        <option>Seleccione...</option>
                                        <option>Crédito a 30 Días</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label>Dirección Fiscal</label>
                                    <input class="form-control" readonly value="AV. LOS FRUTALES 873, PIURA, PIURA "/>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label>Alerta de vencimiento de factura a los</label>
                                    <select class="form-control">
                                        <option>Seleccione...</option>
                                        <option>30 Días</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label>Evaluación del Cliente</label>
                                    <select class="form-control">
                                        <option>Seleccione...</option>
                                        <option>Muy buena</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <h4 class="mt-4">Datos de Contacto</h4>		
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label>Nombre de Contacto</label>
                            <input class="form-control" value="Camilo Lopez Perez"/>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label>Cargo</label>
                            <input class="form-control" value="Gerente Administrativo"/>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label>Central Teléfonica / Teléfono Fijo</label>
                            <input class="form-control" value="017085643"/>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label>Correo Electónico</label>
                            <input class="form-control" value="cliente@agroexportador.com"/>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label>Teléfono Móvil</label>
                            <input class="form-control" value="123456789"/>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label>Fecha de Cumpleaños / Aniversario</label>
                            <input class="form-control" value="14 Marzo 1977"/>
                        </div>
                    </div>	

                    <div class="row mt-2 mb-3">
                        <div class="col-md-12 text-center">
                            <button class="btn btn-info btn-sm"><i class="fas fa-save fa-fw"></i> Editar</button>
                           <a href="{{ route('clientes.index') }}" class="btn btn-info btn-sm ml-2">Cancelar</a>
                            <button class="btn btn-info btn-sm ml-2">Limpiar</button>
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