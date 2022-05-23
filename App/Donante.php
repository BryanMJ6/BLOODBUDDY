<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Donante
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $edad
 * @property $direccion
 * @property $telefono
 * @property $email
 * @property $donante
 * @property $sexo
 * @property $tipo_sangre
 * @property $dui
 * @property $padecimiento
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Donante extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'edad' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'email' => 'required',
		'donante' => 'required',
		'sexo' => 'required',
		'tipo_sangre' => 'required',
		'dui' => 'required',
		'padecimiento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','edad','direccion','telefono','email','donante','sexo','tipo_sangre','dui','padecimiento'];



}
