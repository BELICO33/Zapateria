@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Crear Tarea</h2>
        </div>
        <div>
            <a href="{{route('personas.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>

   

    <form action="{{route('personas.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>NOMBRE:</strong>
                    <input type="text" name="nombre_p" class="form-control" placeholder="Escribe" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>APELLIDO PATERNO:</strong>
                    <input type="text" name="ap_p" class="form-control" placeholder="Escribe" >
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>APELLIDO MATERNO:</strong>
                    <input type="text" name="am_p" class="form-control" placeholder="Escribe" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
        </div>
    </form>
</div>
@endsection