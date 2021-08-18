@extends('layouts.empty', ['paceTop' => true])

@section('title', 'Entrar')

@section('content')
	<!-- begin login-cover -->
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
				Admin
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
				</div>
			</div>
			<form method="POST" action="{{ route('login') }}" class="margin-bottom-0">


			@csrf
				<div class="form-group m-b-20">
					<input id="username" type="text" class="form-control form-control-lg @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required placeholder ="Usuario" autofocus>

					@error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				<div class="form-group m-b-20">
					<input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Clave">

					@error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				<div class="checkbox checkbox-css m-b-20">
					<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

					<label for="remember_checkbox">
						Recuérdame
					</label>
				</div>
				<div class="login-buttons">
					<button type="submit" class="btn pl-btn-primary btn-block btn-lg">Ingresar</button>
				</div>
				<div class="m-t-20">
					Olvido de contraseña. Hacer click <a href="javascript:;">aquí</a>.
				</div>
			</form>
		</div>
		<!-- end login-content -->
	</div>
	<!-- end login -->
@endsection