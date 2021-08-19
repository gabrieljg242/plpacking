@push('css')
    <link href="{{ url('/assets/plugins/DataTable/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('/assets/plugins/DataTable/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css">
@endpush
<table class="table table-bordered data-table display responsive nowrap" style="width:100%">
    <thead>
        <th width="10%">ID</th>
        <th width="30%">Rol</th>
        <th width="40%">Descripción</th>
        <th width="20%">Acciones</th>
    </thead>
    <tbody>
        @foreach ($roles as $rol)
            <tr>
                <td>{{ $rol->id }}</td>
                <td>{{ $rol->name }}</td>
                <td>{{ $rol->description }}</td>
                <td class="text-center">
                    @can('role.update')
                        <a href="{{ URL::action('RolesController@edit',encrypt($rol->id)) }}">
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

@foreach ($roles as $rol)
    <div class="modal modal-warning fade" id="modal-delete-{{ $rol->id }}">
        {!!  Form::open(['method'=>'delete', 'route'=>['roles.destroy', encrypt($rol->id)]])  !!}
        {{  Form::token() }}
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Eliminar rol</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Confirme si desea Eliminar el rol <strong>{{ $rol->name }}</strong></p>
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
