<?php

namespace App\Http\Controllers;

use App\mensajes;
use Illuminate\Http\Request;

class MensajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos1 = Mensajes::all();
        return view('mensajes.index',compact('datos1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mensajes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = request()->except('_token');
        Mensajes::insert($datos);
        //return redirect('mensajes');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mensajes  $mensajes
     * @return \Illuminate\Http\Response
     */
    public function show(mensajes $mensajes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mensajes  $mensajes
     * @return \Illuminate\Http\Response
     */
    public function edit(mensajes $mensajes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mensajes  $mensajes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mensajes $mensajes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mensajes  $mensajes
     * @return \Illuminate\Http\Response
     */
    public function destroy(mensajes $mensajes)
    {
        //
    }
}
