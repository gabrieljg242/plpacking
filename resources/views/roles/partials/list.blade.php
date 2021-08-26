@push('css')
    <link href="{{ url('/assets/plugins/DataTable/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('/assets/plugins/DataTable/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css">
@endpush
<table class="table table-bordered data-table display responsive nowrap" style="width:100%">
    <thead class="text-center bg-secondary text-white">
        <th width="10%">Item</th>
        <th width="30%">Roles</th>
        <th width="40%">Descripción del rol</th>
        <th width="20%">Opciones</th>
    </thead>
    <tbody>
        @foreach ($roles as $key =>$rol)
            <tr>
                <td class="text-center">{{ ($key + 1) }}</td>
                <td class="text-center">{{ $rol->name }}</td>
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
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="{{ url('/assets/plugins/DataTable/dataTables.responsive.min.js') }}"></script>

<script>
    $(document).ready(function() {
        var table = $('.data-table').DataTable( {
            dom: '<"dataTables_wrapper dt-bootstrap"<"row"<"col-xl-7 d-block d-sm-flex d-xl-block justify-content-center"<"d-block d-lg-inline-flex mr-0 mr-sm-3"l><"d-block d-lg-inline-flex"B>><"col-xl-5 d-flex d-xl-block justify-content-center"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>>',
            buttons: [
                @can('role.create')
                {
                    text: 'Crear nuevo rol',
                    className: 'btn btn-sm pl-btn-secondary',
                    action: function ( e, dt, node, config ) {
                       location.href = "{{ url('roles/create') }}";
                    }
                }
                @endcan
            ]
        } );
    } );
</script>
@endpush
