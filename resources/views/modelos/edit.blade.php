@extends("layouts.app")
@section("content")
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{route("modelos.update",$modelo)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="card m-3">
                    <div class="card-body text-center">
                        Edita el modelo
                    </div>
                </div>
                <div class="mb-3">
                    <label for="nombre_modelo" class="form-label">Nombre del modelo</label>
                    <input type="text" class="form-control" id="nombre_modelo" name="nombre_modelo" aria-describedby="emailHelp"
                           placeholder="Modelo" value="{{old("nombre_modelo")?old("nombre_modelo"):$modelo->nombre_modelo}}">

                </div>
                <div class="mb-3">
                    <label for="desc_calzado" class="form-label">Descripcion del calzado</label>
                    <input type="text" class="form-control" id="desc_calzado" name="desc_calzado" aria-describedby="emailHelp"
                           placeholder="Descripcion Calzado" value="{{old("desc_calzado")?old("desc_calzado"):$modelo->desc_calzado}}">

                </div>

                <div class="mb-3">
                    <label for="precio" class="form-label">Ingresa el Precio</label>
                    <input type="text" class="form-control" id="precio" name="precio" aria-describedby="emailHelp"
                           placeholder="Precio" value="{{old("precio")?old("precio"):$modelo->precio}}">

                </div>

                <div>
                    <label for="genero" class="form-label">Género</label>
                    <select name="genero" style="width: 200px;" class="form-select form-select-sm">
                        <option value="disabled selected">Selecciona un genero</option>
                        @foreach($generos as $genero)
                            <option value="{{$genero->id}}">{{$genero->desc_generos}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="color" class="form-label">Color</label>
                    <select name="color" style="width: 200px;" class="form-select form-select-sm">
                        <option value=" disabled selected">Selecciona un color</option>
                        @foreach($colors as $color)
                            <option value="{{$color->id}}">{{$color->color}}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="tallas" class="form-label">Tallas</label>
                    <select name="tallas" style="width: 200px;" class="form-select form-select-sm">
                        <option value="" disabled selected> Selecciona una talla</option>
                        @foreach($tallas as $talla)
                            <option value="{{$talla->id}}">{{$talla->talla}}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="marcas" class="form-label">Marcas</label>
                    <select name="marcas" style="width: 200px;" class="form-select form-select-sm">
                        <option value="" disabled selected> Selecciona una marca</option>
                        @foreach($marcas as $marca)
                            <option value="{{$marca->id}}">{{$marca->desc_marca}}</option>
                        @endforeach
                    </select>

                </div>

                <div>
                    <label for="imagen" class="form-label">Imagen</label>
                    <input type="file" id="imagen" name="imagen" style="width: 200px;" class="form-select form-select-sm"></input>

                </div>
                <a href="{{url("modelos")}}" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>

    </div>
@endsection
