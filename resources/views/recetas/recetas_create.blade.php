@extends("layouts.maestra")

@section("titulo", "Registrar Receta")

@section("contenido")
    <div class="row">
    @if($errors->any())
<h4 class="text-danger">{{$errors->first()}}</h4>
@endif
        <div class="col-12">
            <form method="POST" action="{{ route("recetas.postRecetaMedica") }}">
                @csrf                
                <div class="form-group">
                    <label class="label">Numero de la receta</label>
                    <input required autocomplete="off" name="numero" class="col-sm-8 form-control" type="number" placeholder="Numero">
                </div>

                <div class="form-group">
                    <label class="label">Nombre de Establecimiento</label>
                    <select name="id_establecimiento" id="id_establecimiento" class="col-sm-8 form-control">
                        <option selected disabled readonly>Seleccione un Establecimiento...</option>
                        @foreach($establecimientos as $establecimiento)
                            <option value="{{ $establecimiento->id }}">{{ $establecimiento->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label class="label">Nombre de Medico</label>
                    <select name="id_medico" id="id_medico" class="col-sm-8 form-control">
                        <option selected disabled readonly>Seleccione un Medico...</option>
                        @foreach($medicos as $medico)
                            <option value="{{ $medico->id }}">{{ $medico->nombres }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label class="label">Nombre de Paciente</label>
                    <select name="id_paciente" id="id_paciente" class="col-sm-8 form-control">
                        <option selected disabled readonly>Seleccione un Paciente...</option>
                        @foreach($pacientes as $paciente)
                            <option value="{{ $paciente->id }}">{{ $paciente->nombres }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{ route("recetas.listadoRecetas") }}">Volver al listado</a>
            </form>
        </div>
    </div>
@endsection
