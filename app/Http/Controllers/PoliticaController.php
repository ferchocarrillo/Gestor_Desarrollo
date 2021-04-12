<?php

namespace App\Http\Controllers;

use App\Models\politica;
use Illuminate\Http\Request;

class PoliticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('politica.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\politica  $politica
     * @return \Illuminate\Http\Response
     */
    public function show(politica $politica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\politica  $politica
     * @return \Illuminate\Http\Response
     */
    public function edit(politica $politica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\politica  $politica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, politica $politica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\politica  $politica
     * @return \Illuminate\Http\Response
     */
    public function destroy(politica $politica)
    {
        //
    }
}
