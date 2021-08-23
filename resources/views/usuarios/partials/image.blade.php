<div class="col-sm-6 col-xs-12">
    <div class="form-group">
      {!! Form::label('profile_picture', 'Subir imágen de usuario') !!}
      {!! Form::file('profile_picture', ['class'=>'form-control','id'=>'imageFile']) !!}
    </div>
</div>

@push('scripts')
<script>
    document.getElementById("imageFile").onchange = function(e) {

        // Creamos el objeto de la clase FileReader
        let reader = new FileReader();

        // Leemos el archivo subido y se lo pasamos a nuestro fileReader
        reader.readAsDataURL(e.target.files[0]);
       
        if(reader !== ''){
            $('#overPreview').hide();
                // Le decimos que cuando este listo ejecute el código interno
                reader.onload = function(){
                    let preview = document.getElementById('imagePreview'),
                            image = document.createElement('img');
                            image.setAttribute("class", "img-responsive");
                    image.src = reader.result;

                    preview.innerHTML = '';
                    preview.append(image);
                };
            $('#image-not-found').hide();
            $('#imageProfile').hide();
            $('#imagePreview').show(); 
        }
    } 
</script>
@endpush
