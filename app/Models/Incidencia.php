<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Incidencia
 *
 * @property $id
 * @property $incidencia
 * @property $ordenador_id
 * @property $aula_id
 * @property $usuario_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Aula $aula
 * @property Ordenadore $ordenadore
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Incidencia extends Model
{
    
    static $rules = [
		'incidencia' => 'required',
		'ordenador_id' => 'required',
		'aula_id' => 'required',
		'usuario_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['incidencia','ordenador_id','aula_id','usuario_id'];


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
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'usuario_id');
    }
    

}
