<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas = Personas::latest()->get();
        return view('personas.index',['personas' => $personas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('personas.create');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
       // $request->validate([
          //  'nombre_p' => 'required',
          //  'ap_p' => 'required',
          //  'am_p' => 'required'
       // ]);
    

       Personas::create($request->all());
       return redirect()->route('personas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personas $personas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personas $persona)
    {
        return view('personas.edit',['personas'=> $persona]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personas $persona)
    {
       $persona->update($request->all());
        return redirect()->route('personas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personas $persona)
    {
        $persona->delete();
        return redirect()->route("personas.index");

    }
}
