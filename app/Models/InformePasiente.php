<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InformePasiente
 *
 * @property $id
 * @property $id_estudiante
 * @property $is_asunto
 * @property $id_insumo
 * @property $cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Estudiante $estudiante
 * @property InsumosMedico $insumosMedico
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class InformePasiente extends Model
{
    
    static $rules = [
		'id_estudiante' => 'required',
		'is_asunto' => 'required',
		'id_insumo' => 'required',
		'cantidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_estudiante','is_asunto','id_insumo','cantidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estudiante()
    {
        return $this->hasOne('App\Models\Estudiante', 'id', 'id_estudiante');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function insumosMedico()
    {
        return $this->hasOne('App\Models\InsumosMedico', 'id', 'id_insumo');
    }
    

}
