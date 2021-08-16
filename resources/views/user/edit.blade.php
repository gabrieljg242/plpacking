@extends('layouts.default')

@section('title', 'Crear Usuario')

@section('content')
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-inverse">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Editar Perfil</h4>
                    <div class="panel-heading-btn">
                       
                    </div>
                </div>

                <div class="panel-body">
                    {!! Form::model($user,['route' => ['usuarios.profile.update',encrypt($user->id)] ,'method' => 'PUT', 'id' => 'form']) !!}
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
