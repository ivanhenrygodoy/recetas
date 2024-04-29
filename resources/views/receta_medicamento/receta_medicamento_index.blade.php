@extends("layouts.maestra")

@section("titulo", "Receta Medicamento")

@section("contenido")
    <div class="row">
        <div class="col-12">
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
            <a class="btn btn-primary text-white" href="{{ route('receta_medicamento.catalogoRecetaMedicamentoList') }}">Crear Receta Medicamento</a>
            <br><br>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Cantidad Receta Medicamento</th>
                    <th>Dosis</th>
                    <th>Indicaciones</th>
                    <th>Medicamento</th></tr>
                </thead>
                <tbody>
                @foreach($receta_medicamento as $recetaMedicamento)
                    <tr>
                        <td>{{$recetaMedicamento->cantidad}}</td>
                        <td>{{$recetaMedicamento->dosis}}</td>
                        <td>{{$recetaMedicamento->indicaciones}}</td>
                        <td>{{$recetaMedicamento->medicamento->nombre_medicamento}}</td>

                        <td>
                            <a class="btn btn-warning" href="{{route("receta_medicamento.recetaMedicamentoDetalle",[$recetaMedicamento])}}">
                                <i class="fa fa-edit"> Ver Detalle</i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{ url('/') }}">Home</a>
            

        </div>
    </div>
@endsection