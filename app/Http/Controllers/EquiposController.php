<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquiposController extends Controller
{
    /**Esta es la funcion que nos llevara ala vista de  index de Nosotros**/
    public function index()
    {
        return view('equipos.index');
    }
}