@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">TURNOS</h2>
        </div>
        <div  class="row-cols-1 m-2">
            <a href='{{route('turnos.create')}}' class="btn btn-dark">Asignar un turno</a>
        </div>
    </div>

    <div class="row d-flex justify-content-center p-5 ">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>TURNO</th>
                <th>Acción</th>
            </tr>
            @foreach($turnos as $turno)
            <tr>
                <td class="fw-bold">{{$turno->desc_turno}}</td>
                <td>

                <a href="{{route('turnos.edit', $turno)}}" class="btn btn-warning">Editar</a>

                    <form action="{{route('turnos.destroy',$turno)}}" method="post" class="d-inline">
                    @csrf
                    @method("DELETE")
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
