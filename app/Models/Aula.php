<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Aula
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno[] $alumnos
 * @property Incidencia[] $incidencias
 * @property Ordenadore[] $ordenadores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Aula extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumnos()
    {
        return $this->hasMany('App\Models\Alumno', 'aula_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function incidencias()
    {
        return $this->hasMany('App\Models\Incidencia', 'aula_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ordenadores()
    {
        return $this->hasMany('App\Models\Ordenadore', 'aula_id', 'id');
    }
    

}
