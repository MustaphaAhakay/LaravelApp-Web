<?php

namespace App\Http\Controllers;

use App\Avisclient;
use Illuminate\Http\Request;

class AvisclientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avisclients = Avisclient::all()->toArray();
        return array_reverse($avisclients);
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
     * @param  \App\Avisclient  $avisclient
     * @return \Illuminate\Http\Response
     */
    public function show(Avisclient $avisclient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Avisclient  $avisclient
     * @return \Illuminate\Http\Response
     */
    public function edit(Avisclient $avisclient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Avisclient  $avisclient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avisclient $avisclient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Avisclient  $avisclient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avisclient $avisclient)
    {
        //
    }
}
