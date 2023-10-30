@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">Tallas</h2>
        </div>
        <div class="row-cols-1 m-2">
            <a href="{{route('tallas.create')}}" class="btn btn-dark align-content-center">Agregar tallas</a>
        </div>
    </div>

    <div class="row d-flex justify-content-center p-5 ">
    <table class="table table-bordered text-white ">
            <tr class="text-secondary">
                <th>Talla</th>


                 <th>Acción</th>
            </tr>
            @foreach($tallas as $talla)
            <tr>
                <td class="fw-bold">{{$talla->talla}}</td>



                <td>
                    <a href="{{route('tallas.edit', $talla)}}" class="btn btn-warning">Editar</a>

                    <form action="{{route('tallas.destroy',$talla)}}" method="POST" class="d-inline">
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
</div>
@endsection
