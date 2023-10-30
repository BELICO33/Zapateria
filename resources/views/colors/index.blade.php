@extends('layouts.app')

@section('content')
<div class="row ">
    <div class="col-12">
        <div>
            <h2 class="text-white">Color de Preferencia</h2>
        </div>
        <div class="row-cols-1 m-2">
            <a href="{{route('colors.create')}}" class="btn btn-dark">Agrega una color</a>
        </div>
    </div>

    <div class="row d-flex justify-content-center p-5 ">
    <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>Color</th>


                 <th>Acción</th>
            </tr>
            @foreach($colors as $color)
            <tr>
                <td class="fw-bold">{{$color->color}}</td>



                <td>
                    <a href="{{route('colors.edit', $color)}}" class="btn btn-warning">Editar</a>

                    <form action="{{route('colors.destroy',$color)}}" method="POST" class="d-inline">
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
