@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-12">
        <div>
            <h2 class="text-white">Personas</h2>
        </div>
        <div class="center row-cols-1 m-2">
            <a href="{{route('personas.create')}}" class="btn btn-dark container-fluid">Agregar una personas</a>
        </div>
    </div>



    <div class="row d-flex justify-content-center p-5 ">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>NOMBRE</th>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                 <th>Acción</th>
            </tr>
            @foreach($personas as $persona)
            <tr>
                <td class="fw-bold">{{$persona->nombre_p}}</td>
                <td>{{$persona->ap_p}}</td>
                <td>
                {{$persona->am_p}}
                </td>

                <td>
                    <a href="{{route('personas.edit', $persona)}}" class="btn btn-warning">Editar</a>

                    <form action="{{route('personas.destroy',$persona)}}" method="POST" class="d-inline">
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
