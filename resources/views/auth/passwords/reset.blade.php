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
				Acceso a Intranet
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
				<div class="login-buttons">
					<button type="submit" class="btn pl-btn-primary btn-block btn-lg">Ingresar</button>
				</div>
				<div class="m-t-20">
					Olvido de contraseña. Hacer click <a href="{{ url('/password/reset') }}">aquí</a>.
				</div>
			</form>
		</div>
		<!-- end login-content -->
	</div>
	<!-- end login -->
@endsection
{{--
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

--}}
