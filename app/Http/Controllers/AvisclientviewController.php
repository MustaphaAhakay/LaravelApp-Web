<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

use Illuminate\Http\Request;
use App\Avisclient;

class AvisclientviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('AvisClient.avisclientview ' ,[
            'avisclients' => Avisclient::all()
        ]);
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
        $avisclient = new Avisclient();
        $avisclient->nomClient = $request->input('nomClient');
        $avisclient->commentaire = $request->input('commentaire');
        $avisclient->imageProduit = $request->input('imageProduit');
        $avisclient->save();

        return redirect()->route('avisclientview.index')->with('success', 'avisclient est bien ajouté!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $avisclient = Avisclient::findOrFail($id);
        return view('avisclientview.edit',[
            'avisclient' => $avisclient
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $avisclient = Avisclient::findOrFail($id);
        $avisclient->nomClient = $request->input('nomClient');
        $avisclient->commentaire = $request->input('commentaire');
        $avisclient->imageProduit = $request->input('imageProduit');
        $avisclient->save();

        return redirect()->route('avisclientview.index')->with('success', 'avisclient est bien modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $avisclient = Avisclient::findOrFail($id);
         $avisclient->delete();
        // $where = array('id' => $id);
		// $avisclient = Avisclient::where($where)->first();
		// return Response::json($avisclient);

        return redirect()->route('avisclientview.index')->with('success', 'avisclient est supprimer!');
    }
}
