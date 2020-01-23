<?php

namespace App\Http\Controllers;


use App\Dolar;
use Illuminate\Http\Request;

class DolarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dolares = Dolar::all();
        return view('dolares/list', compact('dolares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dolares = Dolar::all();
        return view('dolares/create', compact('dolares'));
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
            'precio' => ['required'],
            'fecha' => ['required']
        ]);
        $datos = request()->all();
        Dolar::create($datos);

        return redirect()->to('dolares');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Dolar  $dolar
     * @return \Illuminate\Http\Response
     */
    public function show(Dolar $dolar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dolar  $dolar
     * @return \Illuminate\Http\Response
     */
    public function edit(Dolar $dolar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dolar  $dolar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dolar $dolar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dolar  $dolar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dolar $dolar)
    {
        //
    }
}
