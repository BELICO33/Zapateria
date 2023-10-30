@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Agrega una marca</h2>
        </div>
        <div>
            <a href="{{route('marcas.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    <form action="{{route('marcas.store')}}" method="POST">
    @csrf
    <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Marca:</strong>
                    <input type="text" name="desc_marca" class="form-control" placeholder="Agrega la nueva marca" >
                </div>
            </div>
        <div class="row">
           
                
           
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-left mt-2">
                <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
        </div>
    </form>
</div>
@endsection