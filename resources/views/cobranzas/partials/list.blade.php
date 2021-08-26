@push('css')
<link href="{{ url('/assets/plugins/DataTable/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ url('/assets/plugins/DataTable/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css">

@endpush
<table class="table table-bordered data-table display responsive nowrap" style="width:100%">
    <thead class="text-center bg-secondary text-white">
        <th width="10%">Item</th>
        <th width="25%">Razón Social</th>
        <th width="25%">Fecha Ingreso Cliente</th>
        <th width="20%">Zona</th>
        <th width="20%">Numero Factura</th>
        <th width="20%">fecha Facturacion</th>
        <th width="20%">Dias Vencidos</th>
        <th width="20%">Monto Facturado</th>
        <th width="20%">Monto cobrado</th>
        <th width="20%">monto saldo</th>
        <th width="20%">Opciones</th>        
    </thead>
    <tbody>
        <tr class="text-center">
            <td>01</td>
            <td>AGRICOLA SAN MIGUEL DE PIURA</td>
            <td>12 Diciembre 2020</td>
            <td>Piura</td>
            <td><strong>E001-89</strong></td>
            <td>28 Marzo 2021</td>
            <td><span class="pull-right badge bg-red">17 DIAS</span></td>
            <td>US$ 2,500.00</td>
            <td>US$ 1,500.00</td>
            <td>US$ 1,000.00</td>
            <td>
                <a href="{{ route('cobranzas.show', encrypt(1)) }}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Ver detalle"><i class="fas fa-eye fa-fw"></i></a>
            </td>
        </tr>
        
    </tbody>
</table>

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
