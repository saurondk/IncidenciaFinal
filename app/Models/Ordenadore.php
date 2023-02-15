<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ordenadore
 *
 * @property $id
 * @property $numero
 * @property $aula_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno[] $alumnos
 * @property Aula $aula
 * @property Incidencia[] $incidencias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ordenadore extends Model
{
    
    static $rules = [
		'numero' => 'required',
		'aula_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero','aula_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumnos()
    {
        return $this->hasMany('App\Models\Alumno', 'ordenador_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function aula()
    {
        return $this->hasOne('App\Models\Aula', 'id', 'aula_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function incidencias()
    {
        return $this->hasMany('App\Models\Incidencia', 'ordenador_id', 'id');
    }
    

}
