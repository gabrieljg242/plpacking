$(document).ready(function() {
  	$(window).keydown(function(event){
    	if(event.keyCode == 13) {
      		event.preventDefault();
      		return false;
    	}
  	});
});

$('.validate-submit').click((e) =>{

    e.preventDefault();

	swal({
	  	title: '¿Guardar los cambios?',
	  	text: 'Al guardar se actualizará los nuevos datos',
	  	icon: 'success',
	  	buttons: {
			cancel: {
				text: 'Cancelar',
				value: null,
				visible: true,
				className: 'btn btn-default',
				closeModal: true,
			},
			confirm: {
				text: 'Aceptar',
				value: true,
				visible: true,
				className: 'btn btn-success',
				closeModal: true
			}
		}
	})
	.then((willDelete) => {
	  if (willDelete) {
	    $('.validate-submit').closest('form').submit();
	  }
	});

});


$('.validate-cancel').click((e) =>{

    e.preventDefault();

	swal({
	  	title: '¿Descartar los cambios?',
	  	text: 'Al descartar no se guardará los cambios',
	  	icon: 'info',
	  	buttons: {
			cancel: {
				text: 'Cancelar',
				value: null,
				visible: true,
				className: 'btn btn-default',
				closeModal: true,
			},
			confirm: {
				text: 'Aceptar',
				value: true,
				visible: true,
				className: 'btn btn-danger',
				closeModal: true
			}
		},
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
		    history.back();
		}
	});

});