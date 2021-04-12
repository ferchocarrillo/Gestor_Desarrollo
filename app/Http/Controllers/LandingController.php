<?php

namespace App\Http\Controllers;

use App\Models\landing;
use Illuminate\Http\Request;


class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $registros = landing::all();

        return view('landing.create', compact('registros'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosContacto=request()->except('_token');

        $contacto = new Landing();
        $contacto->nombre      =$request->nombre;
        $contacto->correo      =$request->correo;
        $contacto->sugerencia  =$request->sugerencia;
        $contacto->save();
        return back();




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function show(landing $landing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function edit(landing $landing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, landing $landing)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function destroy(landing $landing)
    {
        //
    }
}
