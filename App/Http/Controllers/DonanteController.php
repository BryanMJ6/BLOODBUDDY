<?php

namespace App\Http\Controllers;

use App\Donante;
use Illuminate\Http\Request;

/**
 * Class DonanteController
 * @package App\Http\Controllers
 */
class DonanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $busqueda = $request->busqueda;
        $donantes = Donante::where('id', 'like', '%' . $busqueda . '%')
            ->orWhere('nombre', 'like', '%' . $busqueda . '%')
            ->orWhere('apellido', 'like', '%' . $busqueda . '%')
            ->orWhere('edad', 'like', '%' . $busqueda . '%')
            ->orWhere('direccion', 'like', '%' . $busqueda . '%')
            ->orWhere('telefono', 'like', '%' . $busqueda . '%')
            ->orWhere('email', 'like', '%' . $busqueda . '%')
            ->orWhere('donante', 'like', '%' . $busqueda . '%')
            ->orWhere('sexo', 'like', '%' . $busqueda . '%')
            ->orWhere('tipo_sangre', 'like', '%' . $busqueda . '%')
            ->orWhere('dui', 'like', '%' . $busqueda . '%')
            ->orWhere('padecimiento', 'like', '%' . $busqueda . '%')
            ->latest('id')
            ->paginate(4);

        return view('donante.index', compact('donantes'))
            ->with('i', (request()->input('page', 1) - 1) * $donantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $donante = new Donante();
        return view('donante.create', compact('donante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Donante::$rules);

        $donante = Donante::create($request->all());

        return redirect()->route('donantes.index')
            ->with('success', 'Donante created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donante = Donante::find($id);

        return view('donante.show', compact('donante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donante = Donante::find($id);

        return view('donante.edit', compact('donante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Donante $donante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donante $donante)
    {
        request()->validate(Donante::$rules);

        $donante->update($request->all());

        return redirect()->route('donantes.index')
            ->with('success', 'Donante updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $donante = Donante::find($id)->delete();

        return redirect()->route('donantes.index')
            ->with('success', 'Donante deleted successfully');
    }
}