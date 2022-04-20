<?php

namespace App\Http\Controllers;
use App\Models\Libros;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    
        $libros=Libros::all();
        return $libros;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $libros= new Libros();
        $libros->libro=$request->libro;
        $libros->revista=$request->revista;
        $libros->categoria=$request->categoria;
        $libros->autor=$request->autor;
        $libros->cantida=$request->cantidad;
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
        $libros=new Libros();
        $libros->libro=$request->libro;
        $libros->revista=$request->revista;
        $libros->categoria=$request->categoria;
        $libros->autor=$request->autor;
        $libros->cantidad=$request->cantidad;

        $libros->save();


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
        $libros = Libros::findOrFail($id);
  
        return new LibrosResource($libros);
        
        //return Libros::finOrFail($id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $libros=Libros::findOrfail($request->id);
        $libros->id=$request->id;
        $libros->libro=$request->libro;
        $libros->revista=$request->revista;
        $libros->categoria=$request->categoria;
        $libros->autor=$request->autor;
        $libros->cantidad=$request->cantidad;
      
        $libros->save();
         return $libros;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $libros=Libros::findOrFail($id);
        $libros->delete();
    }
}
