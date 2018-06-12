<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
use Illuminate\Database\QueryException;

class MarcasController extends Controller
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
      $marcas = Marca::all();

      return view('marca.index')->with('marcas',$marcas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marca = new Marca();

        return view('marca.create')->with('marca', $marca);
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
            $marca = Marca::create($request->all());
        }catch(QueryException $queryException){
            dd($queryException->getMessage());
        }
        session()->flash('message_success', 'Marca Creada');

        return redirect()->route('marcas.index');
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
        $marca = Marca::find($id);        
        return view('marca.edit')->with('marca', $marca);
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
            $marca = Marca::find($id);  
            $marca->update($request->all());
        }catch(QueryException $queryException){
            dd($queryException->getMessage());
        }
        session()->flash('message_success', 'Marca Editada');

        return  redirect()->route('marcas.index');
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
            $marca = Marca::find($id);  
            $marca->delete();
        }catch(QueryException $queryException){
            if($queryException->getCode() == '23000'){
                session()->flash('message_error', 'Debes eliminar los tipos asociados a la marca a eliminar');

                return  redirect()->route('marcas.index');
            }
            dd($queryException->getMessage());
        }
        session()->flash('message_success', 'Marca Eliminada');

        return  redirect()->route('marcas.index');
    }
}
