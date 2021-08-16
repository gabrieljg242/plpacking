@push('css')
<link href="{{ url('/assets/plugins/DataTable/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endpush
<table class="table table-bordered">
    <thead class="text-center bg-secondary text-white">
        <th width="10%">Item</th>
        <th width="25%">Razón Social</th>
        <th width="25%">Fecha Ingreso Cliente</th>
        <th width="20%">Tipo Empresa</th>
        <th width="20%">Rubro</th>
        <th width="20%">Zona</th>
        <th width="20%">Coberturable</th>
        <th width="20%">Opciones</th>        
    </thead>
    <tbody>
        <tr class="text-center">
            <td>01</td>
            <td>AGRICOLA SAN MIGUEL DE PIURA</td>
            <td>12 Diciembre 2020</td>
            <td>Juridica</td>
            <td>Agroexportadora</td>
            <td>Piura</td>
            <td>Si</td>
            <td>
                <a href="{{ route('cobranzas.show', encrypt(1)) }}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Ver detalle"><i class="fas fa-eye fa-fw"></i></a>
            </td>
        </tr>
    </tbody>
</table>

@push('scripts')
<script src="{{ url('/assets/plugins/DataTable/datatables.min.js') }}"></script>
<script>
    $(document).ready(function() {
        var table = $('.data-table').DataTable( {
            fixedHeader: true
        } );
    } );
</script>
@endpush
