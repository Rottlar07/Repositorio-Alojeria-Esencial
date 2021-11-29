<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evento
 *
 * @property $id
 * @property $Nombre
 * @property $Categoria
 * @property $Restriccion
 * @property $Fecha
 * @property $Hora
 * @property $Monto
 * @property $Aforo
 * @property $Foto
 *
 * @property Reserva[] $reservas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Evento extends Model
{
    public $timestamps = false;  
    
    static $rules = [
		'Nombre' => 'required',
		'Categoria' => 'required',
		'Restriccion' => 'required',
		'Fecha' => 'required',
		'Hora' => 'required',
		'Monto' => 'required',
		'Aforo' => 'required',
		'Foto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Categoria','Restriccion','Fecha','Hora','Monto','Aforo','Foto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservas()
    {
        return $this->hasMany('App\Models\Reserva', 'Evento_id', 'id');
    }
    
    public function User(){
      return $this->belongsTo('App\Models\User');
  }

}
