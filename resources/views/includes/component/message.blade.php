<div class="row">
	<div class="col-md-12">
		@if(session()->has('message'))
			<div class="alert alert-info fade show m-b-10" id="notificacion-alert">
				<span class="close" data-dismiss="alert">×</span>
				<b>{{ session()->get('message') }}</b>
			</div>
		@endif

		@if (count($errors) > 0)

		<div class="alert alert-danger  fade show m-b-10">
			<span class="close" data-dismiss="alert" style="cursor: pointer;">×</span>
			<strong>Whoops!</strong> ocurrio un problema<br><br>
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
	</div>
</div>