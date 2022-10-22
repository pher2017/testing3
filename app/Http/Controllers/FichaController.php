<?php

namespace App\Http\Controllers;
use App\Models\Ficha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request )
    {
        $search= $request->get('search');
        $fichas = DB::table('fichas')
        ->select('fichas.*')
        ->where('fichas.apellidos','like','%'.$search.'%')
        ->paginate(10);
        return view('fichas.index', compact('fichas','search'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fichas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Ficha::create($request->all());

        return redirect()->route('fichas.index')
                        ->with('success','Ficha Ingresada Correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ficha $ficha)
    {
        return view('fichas.show',compact('ficha'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ficha $ficha)
    {
        return view('fichas.edit',compact('ficha'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ficha $ficha)
    {
        $ficha->update($request->all());
        return redirect()->route('fichas.index')
                        ->with('success','Ficha Actualizada Correctamente');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ficha $ficha)
    {
        $ficha->delete();
        return redirect()->route('fichas.index')
                        ->with('success','Ficha Eliminada Correctamente');
    }

}
