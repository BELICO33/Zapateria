@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Modificaion de marcas</h2>
        </div>
        <div>
            <a href="{{route('marcas.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    <form action="{{route('marcas.update',$marca)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Marca:</strong>
                    <input type="text" name="desc_marca" class="form-control" placeholder="Agrega la nueva marca" value="{{$marca->desc_marca}}">
                </div>
            </div>
        <div class="row">
           
                
           
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-left mt-2">
                <button type="submit" class="btn btn-primary">Actulizar</button>
            </div>
        </div>
    </form>
</div>
@endsection