<?php

namespace App\Http\Controllers;


use App\CategoriaIngreso;
use Illuminate\Http\Request;

class CategoriaIngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias_ingresos = CategoriaIngreso::all();
        return view('categorias_ingresos/list', compact('categorias_ingresos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias_ingresos = CategoriaIngreso::all();
        return view('categorias_ingresos/create', compact('categorias_ingresos'));
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
        CategoriaIngreso::create($datos);

        return redirect()->to('categorias_ingresos');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\CategoriaIngreso  $categorias_ingresos
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriaIngreso $categorias_ingresos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoriaIngreso  $categorias_ingresos
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoriaIngreso $categorias_ingresos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoriaIngreso  $categorias_ingresos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriaIngreso $categorias_ingresos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoriaIngreso  $categorias_ingresos
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoriaIngreso $categorias_ingresos)
    {
        //
    }
}
