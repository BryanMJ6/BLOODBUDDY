<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paciente
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $edad
 * @property $direccion
 * @property $telefono
 * @property $email
 * @property $Tratamiento
 * @property $sexo
 * @property $tipo_sangre
 * @property $dui
 * @property $padecimientos
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paciente extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'edad' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'email' => 'required',
		'Tratamiento' => 'required',
		'sexo' => 'required',
		'tipo_sangre' => 'required',
		'dui' => 'required',
		'padecimientos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','edad','direccion','telefono','email','Tratamiento','sexo','tipo_sangre','dui','padecimientos'];



}
