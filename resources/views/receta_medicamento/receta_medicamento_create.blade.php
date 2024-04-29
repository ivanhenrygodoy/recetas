@extends("layouts.maestra")

@section("titulo", "Registrar Receta Medicamento")

@section("contenido")
    <div class="row">
    @if($errors->any())
<h4 class="text-danger">{{$errors->first()}}</h4>
@endif
        <div class="col-12">
            <form method="POST" action="{{ route("receta_medicamento.creacionRecetaMedicamento") }}">
                @csrf                
                <div class="form-group">
                    <label class="label">Cantidad</label>
                    <input required autocomplete="off" name="cantidad" class="col-sm-8 form-control" type="number" placeholder="cantidad">
                </div>

                <div class="form-group">
                    <label class="label">Dosis</label>
                    <input required autocomplete="off" name="dosis" class="col-sm-8 form-control" type="string" placeholder="dosis">
                </div>

                <div class="form-group">
                    <label class="label">Indicaciones</label>
                    <input required autocomplete="off" name="indicaciones" class="col-sm-8 form-control" type="string" placeholder="indicaciones">
                </div>

                <div class="form-group">
                    <label class="label">Receta</label>
                    <select name="id_receta" id="id_receta" class="col-sm-8 form-control">
                        <option selected disabled readonly>Seleccione una Receta...</option>
                        @foreach($recetas as $receta)
                            <option value="{{ $receta->id }}">{{ $receta->numero }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label class="label">Nombre de Medicamento</label>
                    <select name="id_medicamento" id="id_medicamento" class="col-sm-8 form-control">
                        <option selected disabled readonly>Seleccione un Medicamento...</option>
                        @foreach($medicamentos as $medicamento)
                            <option value="{{ $medicamento->id }}">{{ $medicamento->nombre_medicamento }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{ route("receta_medicamento.listadoRecetaMedicamentos") }}">Volver al listado</a>
            </form>
        </div>
    </div>
@endsection