<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo;
use App\Marca;

class TiposController extends Controller
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
     * Despliega una tabla con todos los tipos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $tipos = Tipo::with('marca')->get();
          return view('tipo.index')->with('tipos', $tipos);

    }

    /**
     * Muestra el formulario para crear un nuevo tipo.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {      
          $tipo = new Tipo();  
          $marcas = Marca::all();
          return view('tipo.create')->with(['marcas' => $marcas, 'tipo' => $tipo]);
    }

    /**
     * Guarda un nuevo tipo en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $tipo = Tipo::create($request->all());
        }catch(QueryException $queryException){
            dd($queryException->getMessage());
        }
        session()->flash('message_success', 'Tipo Creado');

        return redirect()->route('tipos.index');
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
     * Despliega el formulario para editar un tipo.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo = Tipo::find($id);  
        $marcas = Marca::all();
        return view('tipo.edit')->with(['marcas' => $marcas, 'tipo' => $tipo]);
    }

    /**
     * Actualiza un tipo especificado por el id.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $tipo = Tipo::find($id);  
            $tipo->update($request->all());
        }catch(QueryException $queryException){
            dd($queryException->getMessage());
        }
        session()->flash('message_success', 'Tipo Editado');

        return  redirect()->route('tipos.index');
    }

    /**
     * Elimna desde la base de datos un tipo especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $tipo = Tipo::find($id);  
            $tipo->delete();
        }catch(QueryException $queryException){
            dd($queryException->getMessage());
        }
        session()->flash('message_success', 'Tipo Eliminado');

        return  redirect()->route('tipos.index');
    }
}
