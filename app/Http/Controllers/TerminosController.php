<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TerminosController extends Controller
{
    /**Esta es la funcion que nos llevara ala vista de  index de Terminos**/
    public function index()
    {
        return view('terminos.index');
    }
}