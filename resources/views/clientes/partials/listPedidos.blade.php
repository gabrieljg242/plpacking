@push('css')
<link href="{{ url('/assets/plugins/DataTable/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endpush
<div class="row">
    <div class="col-md-6">
        <h4 class="text-success">AGRICOLA SAN MIGUEL DE PIURA</h4>
    </div>
    <div class="col-md-6 text-right">
        <a href="{{ route('clientes.show',encrypt(1)) }}" class="btn btn-success btn-sm ml-2">IR A DATOS DEL CLIENTE</a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <hr>
    </div>
</div>

<table class="table table-bordered data-table">
    <thead class="text-center bg-secondary text-white">
        <th width="10%">Item</th>
        <th width="10%">Cod. Ped.</th>
        <th width="30%">Descripción</th>
        <th width="10%">Cantidad</th>
        <th width="10%">Precio Unidad</th>
        <th width="10%">Sub Total</th>
        <th width="10%">Total con IGV</th>
        <th width="10%">Opciones</th>        
    </thead>
    <tbody>
        <tr class="text-center">
            <td>01</td>
            <td>PED-0055</td>
            <td>NUTRIENTE AGRICOLA PREMIUN 289 Y OTROS</td>
            <td>200</td>
            <td>US$ 7.50</td>
            <td>US$ 1,500.00</td>
            <td>US$ 1,770.00</td>
            <td>
                <a href="{{ route('clientes.show', encrypt(1)) }}" class="btn btn-info btn-sm" data-placement="top" title="Ver detalle" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-eye fa-fw"></i></a>
            </td>
        </tr>
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalCenterTitle">AGRICOLA SAN MIGUEL DE PIURA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-2"><b>CÓDIGO:</b> <span class="text-danger">PED-0055</span></div>
            <div class="col-md-10"><b>MONEDA:</b> DÓLARES AMERICANOS</div>
        </div>
        <div class="row">
            <div class="col-md-2"><b>FECHA:</b> 28 ABRIL 2021</div>
            <div class="col-md-10"><b>VENDEDOR:</b> MARIA DEL CARMEN</div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <table class="table">
                    <thead class="text-center bg-success text-white">
                        <th width="10%">Item</th>
                        <th width="10%">Cod. Ped.</th>
                        <th width="30%">Descripción</th>
                        <th width="10%">Cantidad</th>
                        <th width="10%">Precio Unidad</th>
                        <th width="10%">Sub Total</th>
                        <th width="10%">18% IGV</th>
                        <th width="10%">Total con IGV</th>      
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>01</td>
                            <td>PED-0057</td>
                            <td>NUTRIENTE AGRICOLA PREMIUN 289 Y OTROS</td>
                            <td>500</td>
                            <td>US$ 3.90</td>
                            <td>US$ 1,950.00</td>
                            <td>US$ 351.00</td>
                            <td>US$ 2,301.00</td>
                        </tr>
                        <tr class="text-center">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><b>500</b></td>
                            <td><b>------</b></td>
                            <td><b>US$ 1,950.00</b></td>
                            <td><b>US$ 351.00</b></td>
                            <td><b>US$ 2,301.00</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

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
