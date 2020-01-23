<?php

namespace App\Http\Controllers;


use App\CategoriaGasto;
use Illuminate\Http\Request;

class CategoriaGastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias_gastos = CategoriaGasto::all();
        return view('categorias_gastos/list', compact('categorias_gastos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias_gastos = CategoriaGasto::all();
        return view('categorias_gastos/create', compact('categorias_gastos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store()
    {
        $this->validate(request(), [
            'nombre' => ['required']
        ]);
        $datos = request()->all();
        CategoriaGasto::create($datos);

        return redirect()->to('categorias_gastos');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\CategoriaGasto  $categorias_gastos
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriaGasto $categorias_gastos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoriaGasto  $categorias_gastos
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoriaGasto $categorias_gastos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoriaGasto  $categorias_gastos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriaGasto $categorias_gastos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoriaGasto  $categorias_gastos
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoriaGasto $categorias_gastos)
    {
        //
    }
}
