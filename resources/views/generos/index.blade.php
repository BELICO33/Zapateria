@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="text-white">Generos</h2>
            </div>
            <div class="row-cols-1 m-2">
                <a href="{{route('generos.create')}}" class="btn btn-dark">Asinga un genero</a>
            </div>
        </div>

        <div class="row d-flex justify-content-center p-5 ">
            <table class="table table-bordered text-white">
                <tr class="text-secondary">
                    <th>Genero</th>


                    <th>Acción</th>
                </tr>
                @foreach($generos as $genero)
                    <tr>
                        <td class="fw-bold">{{$genero->desc_generos}}</td>



                        <td>
                            <a href="{{route('generos.edit', $genero)}}" class="btn btn-warning">Editar</a>

                            <form action="{{route('generos.destroy',$genero)}}" method="POST" class="d-inline">
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
