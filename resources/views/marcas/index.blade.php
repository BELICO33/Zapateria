@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">Marcas</h2>
        </div>
        <div>
            <a href="{{route('marcas.create')}}" class="btn btn-dark">Agregar una marca</a>
        </div>
    </div>

    <div class="row d-flex justify-content-center p-5 ">
    <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>Marca</th>


                 <th>Acción</th>
            </tr>
            @foreach($marcas as $marca)
            <tr>
                <td class="fw-bold">{{$marca->desc_marca}}</td>



                <td>
                    <a href="{{route('marcas.edit', $marca)}}" class="btn btn-warning">Editar</a>

                    <form action="{{route('marcas.destroy',$marca)}}" method="POST" class="d-inline">
                            @csrf
                            @method("DELETE")
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
                @endforeach
            </tr>

        </table>
    </div>
</div>
@endsection
