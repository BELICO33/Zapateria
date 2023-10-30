@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Asigna un puesto</h2>
        </div>
        <div>
            <a href="{{route('puestos.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    <form action="{{route('puestos.update',$puesto)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Asigna un puesto:</strong>
                    <input type="text" name="desc_puesto" class="form-control" placeholder="Escribe el puesto a asignar" value="{{$puesto->desc_puesto}}">
                </div>
            </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Salario:</strong>
                    <input type="text" name="salario" class="form-control" placeholder="Escribe la cantidad" value="{{$puesto->salario}}" >
                </div>
           
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Actulizar</button>
            </div>
        </div>
    </form>
</div>
@endsection