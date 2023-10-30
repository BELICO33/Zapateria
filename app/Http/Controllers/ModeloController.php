<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Genero;
use App\Models\Talla;



use Illuminate\Http\Request;

class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modelos= Modelo::all();
        return view("modelos.index", compact("modelos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $generos = Genero::all();
        $colors = Color::all();
        $tallas = Talla::all();
        $marcas = Marca::all();
        return view("modelos.create", compact("generos", "colors", "tallas","marcas"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->file("imagen")->getClientOriginalName();
        $path = basename($request->file("imagen")->store("public/files"));

        Modelo::create([
            "nombre_modelo"=>$request->nombre_modelo,
            "desc_calzado"=>$request->desc_calzado,
            "precio"=>$request->precio,
            "id_color"=>$request->color,
            "id_genero"=>$request->genero,
            "id_tallas"=>$request->tallas,
            "id_marcas"=>$request->marcas,
            "imagen"=>$path,
        ]);
        return redirect()->route("modelos.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Modelo $modelo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modelo $modelo)
    {

        $generos = Genero::all();
        $colors = Color::all();
        $tallas = Talla::all();
        $marcas = Marca::all();
        return view("modelos.edit", compact("modelo","generos", "colors", "tallas","marcas"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Modelo $modelo)
    {
      //  dd($modelo);
        $name = $request->file("imagen")->getClientOriginalName();
        $path = basename($request->file("imagen")->store("public/files"));

       // Modelo::Update([
           $modelo->update([
           "nombre_modelo"=>$request->nombre_modelo,
          "desc_calzado"=>$request->desc_calzado,
          "precio"=>$request->precio,
          "id_color"=>$request->color,
            "id_genero"=>$request->genero,
           "id_tallas"=>$request->tallas,
            "id_marcas"=>$request->marcas,
            "imagen"=>$path,
        ]);
        return redirect()->route("modelos.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modelo $modelo)
    {
        $modelo->delete();
        return redirect()->back();
    }
}
