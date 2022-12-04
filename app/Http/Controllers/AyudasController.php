<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AyudasController extends Controller
{
    /**Esta es la funcion que nos llevara ala vista de  index de Ayuda**/
    public function index()
    {
        return view('ayudas.index');
    }
}