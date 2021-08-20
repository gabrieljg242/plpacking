@push('css')
<link href="{{ url('/assets/plugins/DataTable/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css"/>
<link href="{{ url('/assets/plugins/DataTable/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css">
@endpush
<table class="table table-bordered data-table display responsive nowrap" style="width:100%">
    <thead class="text-center bg-secondary text-white">
        <th width="5%">Item</th>
        <th width="25%">Razón Social</th>
        <th width="10%">Cód. Cliente</th>
        <th width="20%">Rubro</th>
        <th width="20%">Ubucación</th>
        <th width="35%">Fecha registro de cliente</th>
        <th width="20%">Opciones</th>        
    </thead>
    <tbody>
        <tr class="text-center">
            <td>01</td>
            <td>AGRICOLA SAN MIGUEL DE PIURA</td>
            <td>PQ-170690</td>
            <td>Agroexportadora</td>
            <td>Piura</td>
            <td>17 junio 1990</td>
            <td>
                <a href="{{ route('clientes.show', encrypt(1)) }}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Ver detalle"><i class="fas fa-eye fa-fw"></i></a>
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
                {
                    text: '<i class="fas fa-lg fa-fw m-r-10 fa-plus sm-hide"></i> CREAR CLIENTE',
                    className: 'btn btn-sm pl-btn-secondary',
                    action: function ( e, dt, node, config ) {
                        alert( 'Button activated' );
                    }
                },
                {
                    text: '<i class="fas fa-lg fa-fw m-r-10 fa-plus"></i> CREAR PROCEDIMIENTO',
                    className: 'btn btn-sm pl-btn-secondary sm-hide',
                    action: function ( e, dt, node, config ) {
                        alert( 'Button activated' );
                    }
                },
                {
                    text: '<i class="fas fa-file-excel fa-fw sm-hide"></i> EXPORTAR EXCEL',
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
