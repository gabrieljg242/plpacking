@push('css')
    <link href="{{ url('/assets/plugins/DataTable/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('/assets/plugins/DataTable/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css">
@endpush
<table class="table table-bordered data-table display responsive nowrap" style="width:100%">
    <thead class="text-center bg-secondary text-white">
        <th width="10%">Item</th>
        <th width="20%">Nombre y apellido</th>
        <th width="20%">Tipo usuario</th>
        <th width="20%">Área</th>
        <th width="20%">Cargo</th>
        <th width="20%" class="text-center">Estado</th>
        <th width="20%">Opciones</th>
      </thead>
    <tbody>
        @foreach ($users as $key => $usuario)
            <tr>
                <td class="text-center">{{ ($key + 1) }}</td>
                <td>{{ $usuario->name }}</td>
                <td>{{ $usuario->getRoleNames()[0] }}</td>
                <td>{{ isset($usuario->areas->nombre) ? $usuario->areas->nombre : '' }}</td>
                <td>{{ isset($usuario->cargos->nombre) ? $usuario->cargos->nombre : '' }}</td>
                <td class="text-center text-white {{ ($usuario->status == 1 ? 'bg-success' : 'bg-danger') }}">{{ ($usuario->status == 1 ? 'Activo' : 'Desactivado') }}</td>
                <td class="text-center">
                    @can('user.update')
                        <a href="{{ URL::action('UsersController@edit',encrypt($usuario->id)) }}">
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

@foreach ($users as $usuario)

    <div class="modal modal-warning fade" id="modal-delete-{{ $usuario->id }}">
        {!!  Form::open(['method'=>'delete', 'route'=>['usuarios.destroy', encrypt($usuario->id)]])  !!}
        {{  Form::token() }}
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Eliminar usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Confirme si desea Eliminar el Usuario <strong>{{ $usuario->name }}</strong></p>
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
            fixedHeader: true,
            responsive: true,
            dom: '<"dataTables_wrapper dt-bootstrap"<"row"<"col-xl-7 d-block d-sm-flex d-xl-block justify-content-center"<"d-block d-lg-inline-flex mr-0 mr-sm-3"l><"d-block d-lg-inline-flex"B>><"col-xl-5 d-flex d-xl-block justify-content-center"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>>',
            buttons: [
                @can('user.create')
                    {
                        text: 'Nuevo Usuario',
                        className: 'btn btn-sm pl-btn-secondary',
                        action: function ( e, dt, node, config ) {
                            location.href = "{{ url('usuarios/create') }}";
                        }
                    },
                @endcan
            ]
        } );
    } );
</script>
@endpush
