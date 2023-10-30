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

    <form action="{{route('turnos.update',$turno)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Elige (El turno):</strong>
                    <select name="desc_turno" class="form-select" id="">
                        <option value="">-- Elige --</option>
                        <option value="Matutino" @selected("Matutino" == $turno->desc_turno)>Matutino</option>
                        <option value="Vespertino" @selected("Vespertino" == $turno->desc_turno)>Vespertino</option>
                        <option value="Nocturno" @selected("Nocturno" == $turno->desc_turno)>Nocturno</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-left mt-2">
                <button type="submit" class="btn btn-primary">Actulizar</button>
            </div>
        </div>
    </form>
</div>
@endsection