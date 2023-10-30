@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2>Modificaion Genero</h2>
            </div>
            <div>
                <a href="{{route('generos.index')}}" class="btn btn-primary">Volver</a>
            </div>
        </div>

        <form action="{{route('generos.update',$genero)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Genero:</strong>
                    <input type="text" name="desc_generos" class="form-control" placeholder="Agrega la nueva marca" value="{{$genero->desc_generos}}">
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
