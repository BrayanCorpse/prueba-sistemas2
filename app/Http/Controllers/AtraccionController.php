<?php

namespace App\Http\Controllers;

use App\Atraccion;
use App\Blog;
use App\Clasificacion;
use Illuminate\Http\Request;

class AtraccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atracciones=\DB::select("SELECT cl.`id` AS idc,cl.`nombre` AS cnombre, atr.`nombre` AS anombre,cl.`descripcion` AS descripcion
        FROM clasificacions AS cl 
        INNER JOIN atraccions AS atr ON atr.`clasificacion_id` = cl.`id`");

        $blogs = Blog::all();
        $clasificaciones = Clasificacion::all();

        return view('principal')
        ->with("atracciones",$atracciones)
        ->with("blogs",$blogs)
        ->with("clasificaciones",$clasificaciones);
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
     * @param  \App\Atraccion  $atraccion
     * @return \Illuminate\Http\Response
     */
    public function show(Atraccion $atraccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Atraccion  $atraccion
     * @return \Illuminate\Http\Response
     */
    public function edit(Atraccion $atraccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Atraccion  $atraccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atraccion $atraccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Atraccion  $atraccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atraccion $atraccion)
    {
        //
    }
}
