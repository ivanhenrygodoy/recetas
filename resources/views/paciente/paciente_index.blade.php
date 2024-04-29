@extends("layouts.maestra")

@section("titulo", "Pacientes")

@section("contenido")
    <div class="row">
        <div class="col-12">
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
            <a class="btn btn-primary text-white" href="{{ route('paciente.createPacientesView') }}">Crear Paciente</a>
            <br><br>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>nombres</th>
                    <th>apellidos</th>
                    <th>fecha de nacimiento</th>
                </thead>
                <tbody>
                @foreach($pacientes as $paciente)
                    <tr>
                        <td>{{$paciente->nombres}}</td>
                        <td>{{$paciente->apellidos}}</td>
                        <td>{{$paciente->fecha_nacimiento}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{ url('/') }}">Home</a>
            

        </div>
    </div>
@endsection