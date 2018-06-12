<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bicicleta;
use App\Tipo;

class BicicletaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bicicletas = Bicicleta::with('tipo')->get();

        return view('bicicleta.index')->with('bicicletas', $bicicletas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bicicleta = new Bicicleta();  
        $tipos = Tipo::all();
        return view('bicicleta.create')->with(['tipos' => $tipos, 'bicicleta' => $bicicleta]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $bicicleta = Bicicleta::create($request->all());
        }catch(QueryException $queryException){
            dd($queryException->getMessage());
        }
        session()->flash('message_success', 'Bicicleta Creada');

        return redirect()->route('bicicletas.index');
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
        $bicicleta = Bicicleta::find($id);  
        $tipos = Tipo::all();
        return view('bicicleta.edit')->with(['tipos' => $tipos, 'bicicleta' => $bicicleta]);
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
        try{
            $bicicleta = Bicicleta::find($id);  
            $bicicleta->update($request->all());
        }catch(QueryException $queryException){
            dd($queryException->getMessage());
        }
        session()->flash('message_success', 'Bicicleta Editada');

        return  redirect()->route('bicicletas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $bicicleta = Bicicleta::find($id);  
            $bicicleta->delete();
        }catch(QueryException $queryException){
            dd($queryException->getMessage());
        }
        session()->flash('message_success', 'Bicicleta Eliminada');

        return  redirect()->route('bicicletas.index');
    }
}
