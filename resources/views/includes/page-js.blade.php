<!-- ================== BEGIN BASE JS ================== -->
<script src="{{ url('/assets/js/app.min.js') }}"></script>
<script src="{{ url('/assets/js/theme/default.min.js') }}"></script>
<script src="{{ url('/assets/plugins/jquery-validation/dist/jquery.validate.js') }}"></script>
<script src="{{ url('/assets/plugins/sweetalert/dist/sweetalert.min.js') }}"></script>

<!-- ================== END BASE JS ================== -->

<script>

	$(document).ready(function(){
		setTimeout(() => {
			$('#notificacion-alert').remove();
		}, 8000);
	});

</script>

@stack('scripts')