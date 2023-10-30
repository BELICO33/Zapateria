<?php

namespace App\Http\Controllers;

use App\Models\Talla;
use Illuminate\Http\Request;

class TallaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tallas = Talla::latest()->get();
        return view('tallas.index', ['tallas'=>$tallas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tallas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Talla::create($request->all());
        return redirect()->route('tallas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Talla $talla)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Talla $talla)
    {
        return view('tallas.edit',['talla'=>$talla]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Talla $talla)
    {
        $talla->update($request->all());
        return redirect()->route('tallas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Talla $talla)
    {
        $talla->delete();
        return redirect()->route("tallas.index");
        
    }
}
