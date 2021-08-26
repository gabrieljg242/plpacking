@push('css')
<link href="{{ url('/assets/plugins/DataTable/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css"/>
<link href="{{ url('/assets/plugins/DataTable/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css">
@endpush
<table class="table table-bordered data-table display responsive nowrap" style="width:100%">
    <thead class="text-center bg-secondary text-white">
        <th width="5%">Item</th>
        <th width="25%">Fecha Ingreso</th>
        <th width="10%">Fecha Proceso</th>
        <th width="20%">Procedencia</th>
        <th width="20%">Producto</th>
        <th width="35%">Cliente</th>
        <th width="20%">Número de Guía</th>      
        <th width="20%">Código Trazabilidad</th> 
        <th width="20%">Nro. Jaba</th> 
        <th width="20%">Peso Guía</th> 
        <th width="20%">Peso Planta</th> 
        <th width="20%">Def. Peso</th> 
        <th width="20%">%</th> 
        <th width="20%">Opciones</th> 
    </thead>
    <tbody>
        <tr class="text-center">
            <td>Test</td>
            <td>Test</td>
            <td>Test</td>
            <td>Test</td>
            <td>Test</td>
            <td>Test</td>
            <td>Test</td>
            <td>Test</td>
            <td>Test</td>
            <td>Test</td>
            <td>Test</td>
            <td>Test</td>
            <td>Test</td>
            <td>
                <a href="{{ route('clientes.edit', encrypt(1)) }}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Ver detalle"><i class="fas fa-eye fa-fw"></i></a>
            </td>
        </tr>
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
                @can('client.create')
                    {
                        text: 'Crear Cliente',
                        className: 'btn btn-sm pl-btn-secondary',
                        action: function ( e, dt, node, config ) {
                            location.href = '{{ url("clientes/create") }}';
                        }
                    },
                @endcan
                {
                    text: 'Exportar Excel',
                    className: 'btn btn-sm pl-btn-secondary',
                    action: function ( e, dt, node, config ) {
                        alert( 'Button activated' );
                    }
                }
            ]
        } );
    } );
</script>
@endpush
