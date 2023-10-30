@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Agrega un color</h2>
        </div>
        <div>
            <a href="{{route('colors.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    <form action="{{route('colors.store')}}" method="POST">
    @csrf
    <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>COLORES:</strong>
                    <input type="text" name="color" class="form-control" placeholder="Agrega un color" >
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