@extends('layouts.empty', ['paceTop' => true])

@section('title', 'Restablecimiento de contraseña ')
  
@section('content')
<div class="login-cover">
    <div class="login-cover-image" style="background-image: url({{ url('/assets/img/login-bg/login-bg-14.jpg') }})" data-id="login-cover-image"></div>
    <div class="login-cover-bg"></div>
</div>
<!-- end login-cover -->

<!-- begin login -->
<div class="login login-v2" data-pageload-addclass="animated fadeIn">

    <div class="logo-container mb-5">
        <img src="{{ url('assets/img/logo-3.png') }}" alt="">
    </div>

    <!-- begin brand -->
    <div class="login-header">
        <div class="brand text-center">
            Reestablecer contraseña
        </div>
        
    </div>
    <!-- end brand -->
    <!-- begin login-content -->
    <div class="login-content">
        <div class="row">
            <div class="col-md-12">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Error al ingresar<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
            </div>
        </div>
        <form method="POST" action="{{ route('forget.password.post') }}" class="margin-bottom-0">


        @csrf            
            <div class="form-group m-b-20">                
                <input type="text" id="email_address" class="form-control form-control-lg" name="email" required autofocus placeholder ="Correo">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif                
            </div>
            
            <div class="login-buttons">
                <button type="submit" class="btn pl-btn-primary btn-block btn-lg">Enviar</button>
            </div>  
            <div class="m-t-20">
                Regresara. Hacer click <a href="{{ route('login') }}">aquí</a>.
            </div>          
        </form>
    </div>
    <!-- end login-content -->
</div>
<!-- end login -->
@endsection 