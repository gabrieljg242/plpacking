@push('css')
<link href="{{ url('/assets/plugins/DataTable/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ url('/assets/plugins/DataTable/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css">

@endpush
<table class="table table-bordered data-table display responsive nowrap" style="width:100%">
    <thead>
        <th width="10%">ID</th>
        <th width="25%">Permiso</th>
        <th width="25%">Descripción</th>
        <th width="20%">Modulo</th>
        <th width="20%">Acciones</th>        
    </thead>
    <tbody>
        @foreach ($permissions as $permiso)
        <tr>
            <td>{{ $permiso->id }}</td>
            <td>{{ $permiso->name }}</td>
            <td>{{ $permiso->description }}</td>
            <td>{{ $permiso->module }}</td>
            <td class="text-center">
                @can('permission.update')
                <a href="{{ URL::action('PermissionsController@edit', encrypt($permiso->id)) }}">
                    {{ Form::button(
                    '<i class="fa fa-edit"></i>',
                    [
                    'type' => 'submit',
                    'class' => 'btn btn-info btn-sm',
                    'data-toggle' => 'tooltip',
                    'title' => 'Editar'
                    ]
                    )}}
                </a>
                @endcan
        </td>
    </tr>
    @endforeach
</tbody>
</table>

@foreach ($permissions as $permiso)
<div class="modal modal-warning fade" id="modal-delete-{{ $permiso->id }}">
    {!!  Form::open(['method'=>'delete', 'route'=>['permisos.destroy', encrypt($permiso->id)]])  !!}
    {{  Form::token() }}
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Eliminar permiso</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <p>Confirme si desea Eliminar el permiso <strong>{{ $permiso->name }}</strong></p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </div>
</div>
</div>
{!!  Form::close() !!}
</div>
@endforeach

@push('scripts')
<script src="{{ url('/assets/plugins/DataTable/datatables.min.js') }}"></script>
<script src="{{ url('/assets/plugins/DataTable/dataTables.responsive.min.js') }}"></script>

<script>
    $(document).ready(function() {
        var table = $('.data-table').DataTable( {
            fixedHeader: true
        } );
    } );
</script>
@endpush
