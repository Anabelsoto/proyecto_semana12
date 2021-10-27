<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cita
 * @package App\Models
 * @version October 27, 2021, 10:17 pm UTC
 *
 * @property \App\Models\Doctor $idDoctor
 * @property \Illuminate\Database\Eloquent\Collection $citaDetalles
 * @property integer $id_paciente
 * @property string|\Carbon\Carbon $fecha_cita
 * @property integer $id_doctor
 */
class Cita extends Model
{
    //use SoftDeletes;

    public $table = 'cita';
    protected $primaryKey='idcita';
    public $timestamps=false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_paciente',
        'fecha_cita',
        'id_doctor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcita' => 'integer',
        'id_paciente' => 'integer',
        'fecha_cita' => 'datetime',
        'id_doctor' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_paciente' => 'nullable|integer',
        'fecha_cita' => 'nullable',
        'id_doctor' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idDoctor()
    {
        return $this->belongsTo(\App\Models\Doctor::class, 'id_doctor');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function citaDetalles()
    {
        return $this->hasMany(\App\Models\CitaDetalle::class, 'idcita');
    }
}
