@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div >
            <h2 class="text-white">Asignacion de puestos</h2>
        </div>
        <div  class="row-cols-1 m-2">
            <a href="{{route('puestos.create')}}" class="btn btn-dark">Agregar un puesto</a>
        </div>
    </div>

    <div class="row d-flex justify-content-center p-5 ">
    <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>PUESTO</th>
                <th>SALARIO</th>

                 <th>Acción</th>
            </tr>
            @foreach($puestos as $puesto)
            <tr>
                <td class="fw-bold">{{$puesto->desc_puesto}}</td>
                <td>{{$puesto->salario}}</td>


                <td>
                    <a href="{{route('puestos.edit', $puesto)}}" class="btn btn-warning">Editar</a>

                    <form action="{{route('puestos.destroy',$puesto)}}" method="POST" class="d-inline">
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
