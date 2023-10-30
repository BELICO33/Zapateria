@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Asigna un turno</h2>
        </div>
        <div>
            <a href="{{route('turnos.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    <form action="{{route('turnos.store')}}" method="POST">
        @csrf
        <div class="row">
            
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Elige (El turno):</strong>
                    <select name="desc_turno" class="form-select" id="">
                        <option value="">-- Elige --</option>
                        <option value="Matutino">Matutino</option>
                        <option value="Vespertino">Vespertino</option>
                        <option value="Nocturno">Nocturno</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-left mt-2">
                <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
        </div>
    </form>
</div>
@endsection