@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Editar Tarea</h2>
        </div>
        <div>
            <a href="{{route('personas.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>

   

    <form action="{{route('personas.update', $personas)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>NOMBRE:</strong>
                    <input type="text" name="nombre_p" class="form-control" placeholder="Escribe" value="{{$personas->nombre_p}}" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>APELLIDO PATERNO:</strong>
                    <input type="text" name="ap_p" class="form-control" placeholder="Escribe" value="{{$personas->ap_p}}" >
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>APELLIDO MATERNO:</strong>
                    <input type="text" name="am_p" class="form-control" placeholder="Escribe"value="{{$personas->am_p}}" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </form>
</div>
@endsection