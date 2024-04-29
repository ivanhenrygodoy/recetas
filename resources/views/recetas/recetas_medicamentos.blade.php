@extends("layouts.maestra")
@section("titulo", "Editar nivel")
@section("contenido")
    <div class="row">
        <div class="col-12">
        <table class="table table-bordered">
            <br><br>

            <h3>Medicamentos de la receta #{{$numero_receta}}
                <thead>
                <tr>
                    <th>Numero Receta</th>
                    <th>Medicamento</th>
                    <th>Cantidad</th>
                    <th>Dosis</th>
                    <th>Indicaciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($detalle_receta as $detalleReceta)
                    <tr>
                        <td>{{$numero_receta}}</td>
                        <td>{{$detalleReceta->medicamento->nombre_medicamento}}</td>
                        <td>{{$detalleReceta->cantidad}}</td>
                        <td>{{$detalleReceta->dosis}}</td>
                        <td>{{$detalleReceta->indicaciones}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{route("recetas.listadoRecetas")}}">Regresar</a>
        </div>
    </div>
@endsection