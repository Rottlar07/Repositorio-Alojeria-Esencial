<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

/**
 * Class EventoController
 * @package App\Http\Controllers
 */
class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::paginate();

        return view('evento.index', compact('eventos'))
            ->with('i', (request()->input('page', 1) - 1) * $eventos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $evento = new Evento();
        return view('evento.create', compact('evento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        request()->validate(Evento::$rules);

        $datosEvento = request()->except('_token');
        //return response()->json($datosEvento);

        if($request->hasFile('Foto')){
            $datosEvento['Foto']=$request->file('Foto')->store('uploads','public');
        }

        $evento = Evento::create($datosEvento);

        return redirect()->route('eventos.index')
            ->with('success', '¡Evento creado exitósamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento = Evento::find($id);

        return view('evento.show', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evento = Evento::find($id);

        return view('evento.edit', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Evento $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(Evento::$rules);

        $datosEvento = request()->except('_token','_method');
        //return response()->json($eventoU);

        if($request->hasFile('Foto')){

            $evento = Evento::findOrFail($id);
            Storage::delete('public/'.$evento->Foto);

            $datosEvento['Foto']=$request->file('Foto')->store('uploads','public');
        }

        $evento->update($datosEvento);

        return redirect()->route('eventos.index')
            ->with('success', '¡Evento actualizado exitósamente!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {   
        $evento = Evento::findOrFail($id);
        Storage::delete('public/'.$evento->Foto);

        $evento = Evento::find($id)->delete();

        return redirect()->route('eventos.index')
            ->with('success', '¡Evento eliminado exitósamente!');
    }
}
