@extends("layouts.maestra")

@section("titulo", "Recetas")

@section("contenido")
    <div class="row">
        <div class="col-12">
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
         
            <a class="btn btn-primary text-white" href="{{ route('recetas.catalogosVistaReceta') }}">Crear receta</a>
            <br><br>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Numero Receta</th>
                    <th>Medico</th>
                    <th>Paciente</th></tr>
                </thead>
                <tbody>
                @foreach($recetas as $receta)
                    <tr>
                        <td>{{$receta->numero}}</td>
                        <td>{{$receta->pacientes->nombres}} {{$receta->pacientes->apellidos}}</td>
                        <td>{{$receta->medicos->nombres}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{route("recetas.filtrarDetalleRecetaMedicamento",[$receta])}}">
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