<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alumno
 *
 * @property $id
 * @property $nombre
 * @property $apellidos
 * @property $email
 * @property $ordenador_id
 * @property $aula_id
 *
 * @property Aula $aula
 * @property Ordenadore $ordenadore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Alumno extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellidos' => 'required',
		'email' => 'required',
		'ordenador_id' => 'required',
		'aula_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidos','email','ordenador_id','aula_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function aula()
    {
        return $this->hasOne('App\Models\Aula', 'id', 'aula_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ordenadore()
    {
        return $this->hasOne('App\Models\Ordenadore', 'id', 'ordenador_id');
    }
    

}
