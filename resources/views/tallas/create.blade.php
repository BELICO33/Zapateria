@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Agrega una talla</h2>
        </div>
        <div>
            <a href="{{route('tallas.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    <form action="{{route('tallas.store')}}" method="POST">
    @csrf
    <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>TALLAS:</strong>
                    <input type="text" name="talla" class="form-control" placeholder="Agrega alguna talla" >
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