@push('css')
<link href="{{ url('/assets/plugins/DataTable/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css"/>
<link href="{{ url('/assets/plugins/DataTable/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css">
@endpush
<table class="table table-bordered data-table display responsive nowrap" style="width:100%">
    <thead class="text-center bg-secondary text-white">
        <th width="5%">Item</th>
        <th width="75%">Marca</th>
        <th width="20%">Opciones</th>        
    </thead>
    <tbody>
        @foreach($marcavehiculos as $key => $marcavehiculo)
        <tr class="text-center">
            <td>{{ ($key + 1) }}</td>
            <td>{{ $marcavehiculo->nombre }}</td>
            <td>
                @can('marcavehiculo.update')
                <a href="{{ route('marcavehiculo.edit', encrypt($marcavehiculo->id)) }}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Ver detalle"><i class="fas fa-eye fa-fw"></i></a>
                @endcan
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@push('scripts')
<script src="{{ url('/assets/plugins/DataTable/datatables.min.js') }}"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="{{ url('/assets/plugins/DataTable/dataTables.responsive.min.js') }}"></script>

<script>
    $(document).ready(function() {
        var table = $('.data-table').DataTable( {
            dom: '<"dataTables_wrapper dt-bootstrap"<"row"<"col-xl-7 d-block d-sm-flex d-xl-block justify-content-center"<"d-block d-lg-inline-flex mr-0 mr-sm-3"l><"d-block d-lg-inline-flex"B>><"col-xl-5 d-flex d-xl-block justify-content-center"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>>',
            buttons: [
                @can('marcavehiculo.create')
                    {
                        text: 'Crear Marca Vehiculo',
                        className: 'btn btn-sm pl-btn-secondary',
                        action: function ( e, dt, node, config ) {
                            location.href = '{{ url("marcavehiculo/create") }}';
                        }
                    },
                @endcan
            ]
        } );
    } );
</script>
@endpush
