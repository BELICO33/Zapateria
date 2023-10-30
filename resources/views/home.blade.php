@extends("layouts.app")

@section("content")
    <div class="text-center bg-dark p-2 ms-4"><h1>Nuevos Modelos</h1></div>
    <div class="row justify-content-center">

    </div>
    <div class="row justify-content-center mt-5">

        <div class="col-10 bg-white pt-3" style="display: flex;">
            <div class="row">
                @foreach($modelos as $modelo)
                    <div class="card col-4 mt-4" style="width: 18rem; margin-top: 2rem; margin: 1rem;">
                        <img src="{{asset('storage/files/'.$modelo->imagen)}}" class="card-img-top" alt="Imagen" style=" height: 25rem;">
                        <div class="card-body">
                            <h5 class="card-title">Nombre: {{$modelo->nombre_modelo}}</h5>
                            <h6 class="card-title">Descripción: {{$modelo->desc_calzado}}</h6>
                            <h7 class="card-title">Precio: ${{$modelo->precio}}</h7>
                            <p class="card-text">
                                <span class="fw-bold">Genero: </span>
                                {{$modelo->getGenero->desc_generos}}
                            </p>
                            <p class="card-text">
                                <span class="fw-bold">Color: </span>
                                {{$modelo->getColor->color}}
                            </p>
                            <p>
                                <span class="fw-bold">Talla: </span>
                                {{$modelo->getTalla->talla}}
                            </p>
                            <p>
                                <span class="fw-bold">Marca: </span>
                                {{$modelo->getMarca->desc_marca}}
                            </p>

                            <div class="align-items-center">

                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>



@endsection
