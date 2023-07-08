<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudiante
 *
 * @property $id
 * @property $nombres
 * @property $nivel
 * @property $n_representante
 * @property $celular
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
		'nivel' => 'required',
		'n_representante' => 'required',
		'celular' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','nivel','n_representante','celular'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function informePasientes()
    {
        return $this->hasMany('App\Models\InformePasiente', 'id_estudiante', 'id');
    }
    

}
