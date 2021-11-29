<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reserva
 *
 * @property $id
 * @property $Nombres
 * @property $Apellidos
 * @property $Dni
 * @property $Correo
 * @property $Celular
 * @property $Evento_id
 *
 * @property Evento $evento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reserva extends Model
{
    public $timestamps = false;  
    
    static $rules = [
		'Nombres' => 'required',
		'Apellidos' => 'required',
		'Dni' => 'required',
		'Correo' => 'required',
		'Celular' => 'required',
		'Evento_id' => 'required',
    'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombres','Apellidos','Dni','Correo','Celular','Evento_id','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function evento()
    {
        return $this->hasOne('App\Models\Evento', 'id', 'Evento_id');
    }
    
    public function user(){
      return $this->belongsTo('App\Models\User');
    }

}
