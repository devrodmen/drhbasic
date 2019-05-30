@extends('vendor.gyomanager.page')

@section('content')
<div class="well" style="position: relative;top:-10px;height: 65px;background: white;">
  <div class="row">
    <div class="col-md-6"><h2 class="" > Cotizaciones
      <button class="btn btn-sm btn-primary form-control" style="width: 150px" onclick="Mostrar('php/nueva_cotizacion.php');"> Nueva cotización</button>
    </h2>
    </div>
    <div class="col-md-6" id="app">
        <dashboard-component></dashboard-component>
    </div>
  </div>
</div>

<div class="well" style="position: relative;top:-25px;background: white;">
    <section class="box-typical" style="">
        <div id="toolbar">

        </div>
        <div class="table-responsive" id="tabla_pedido">
           <div class="" style="">
                <table class="table table-striped" id="dataTables-exampleca" style="width:100%">
                    <thead>
                      <tr role="row">
                        <th style="width:10%;"><center><font color="#000" size="-2px">FECHA</font></center></th>
                        <th style="width:10%;"><center><font color="#000" size="-2px">NUM.</font></center></th>
                        <th style="width:10%;"><center><font color="#000" size="-2px">RUC / DNI</font></center></th>
                        <th style="width:20%;"><center><font color="#000" size="-2px">DENOMINACION</font></center></th>
                        <th style="width:5%;"><center><font color="#000" size="-2px">M</font></center></th>
                        <th style="width:10%;"><center><font color="#000" size="-2px">TOTAL ONEROSA</font></center></th>
                        <th style="width:20%;"><center><font color="#000" size="-2px">ENVIADO AL CLIENTE</font></center></th>
                        <th style="width:10%;"><center><font color="#000" size="-2px">PDF</font></center></th>
                        <th style="width:30%;"><center><font color="#000" size="-2px">OPCIONES</font></center></th>
                      </tr>
                    </thead>
                    <tbody></tbody>
          		</table>
    		</div>
        </div>
    </section>
</div>
@stop