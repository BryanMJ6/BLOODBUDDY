<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactosController extends Controller
{
    /**Esta es la funcion que nos llevara ala vista de  index de Contactos**/
    public function index()
    {
        return view('contactos.index');
    }
}