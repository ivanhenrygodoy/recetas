@extends("layouts.maestra")

@section("titulo", "Registrar Paciente")

@section("contenido")
    <div class="row">
    @if($errors->any())
<h4 class="text-danger">{{$errors->first()}}</h4>
@endif
        <div class="col-12">
            <form method="POST" action="{{ route("paciente.crearPaciente") }}">
                @csrf                
                <div class="form-group">
                    <label class="label">nombres</label>
                    <input required autocomplete="off" name="nombres" class="col-sm-8 form-control" type="string" placeholder="nombres">
                </div>

                <div class="form-group">
                    <label class="label">Apellidos</label>
                    <input required autocomplete="off" name="apellidos" class="col-sm-8 form-control" type="string" placeholder="apellidos">
                </div>

                <div class="form-group">
                    <label class="label">Fecha de Nacimiento</label>
                    <input required autocomplete="off" name="fecha_nacimiento" class="col-sm-8 form-control" type="date" placeholder="fecha de nacimiento">
                </div>

                <button type="submit" class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{ route("paciente.listadoPacientes") }}">Volver al listado</a>
            </form>
        </div>
    </div>
@endsection