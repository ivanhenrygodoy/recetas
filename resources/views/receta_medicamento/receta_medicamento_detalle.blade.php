@extends("layouts.maestra")
@section("titulo", "Editar nivel")
@section("contenido")
    <div class="row">
        <div class="col-12">
        <table class="table table-bordered">
            <br><br>
                <thead>
                <tr>
                    <th>Cantidad</th>
                    <th>Dosis</th>
                    <th>Indicaciones</th>
                    <th>Nombre del medicamento</th>
                    <th>Indicaciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($detalle_receta_medicamento as $detalleReceta)
                    <tr>
                        <td>{{$detalleReceta->cantidad}}</td>
                        <td>{{$detalleReceta->dosis}}</td>
                        <td>{{$detalleReceta->indicaciones}}</td>
                        <td>{{$detalleReceta->medicamento->nombre_medicamento}}</td>
                        <td>{{$detalleReceta->indicaciones}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{route("receta_medicamento.listadoRecetaMedicamentos")}}">Regresar</a>
        </div>
    </div>
@endsection