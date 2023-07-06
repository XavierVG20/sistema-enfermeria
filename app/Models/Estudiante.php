<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudiante
 *
 * @property $id
 * @property $nombres
 * @property $n_identificacion
 * @property $celular
 * @property $nivel
 * @property $created_at
 * @property $updated_at
 *
 * @property InformePasiente[] $informePasientes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estudiante extends Model
{
    
    static $rules = [
		'nombres' => 'required',
		'n_identificacion' => 'required',
		'celular' => 'required',
		'nivel' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','n_identificacion','celular','nivel'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function informePasientes()
    {
        return $this->hasMany('App\Models\InformePasiente', 'id_estudiante', 'id');
    }
    

}
