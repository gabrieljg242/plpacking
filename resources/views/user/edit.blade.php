@extends('layouts.default')

@section('title', 'Crear Usuario')

@section('title', 'Perfil de usuario')

@section('pageHeader', 'Perfil de usuario')

@section('content')
<div class="spark-screen">
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-inverse">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Datos de usuario</h4>
                    <div class="panel-heading-btn">
                       
                    </div>
                </div>

                <div class="panel-body">
                    @include('includes.component.message')
                    {!! Form::model($user,['route' => ['usuarios.profile.update',encrypt($user->id)] , 'enctype' => 'multipart/form-data' ,'method' => 'PUT', 'id' => 'form']) !!}
                        @include('user.partials.form')
                    {!! Form::close() !!}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
    </div>
</div>

@endsection
