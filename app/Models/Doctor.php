<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Doctor
 * @package App\Models
 * @version October 27, 2021, 11:44 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $cita
 * @property string $ape_nom
 * @property string $DNI
 * @property string $especialidad
 */
class Doctor extends Model
{
    //use SoftDeletes;

    public $table = 'doctor';
    protected $primaryKey='iddoctor';
    public $timestamps=false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ape_nom',
        'DNI',
        'especialidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'iddoctor' => 'integer',
        'ape_nom' => 'string',
        'DNI' => 'string',
        'especialidad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ape_nom' => 'nullable|string|max:45',
        'DNI' => 'nullable|string|max:8',
        'especialidad' => 'nullable|string|max:145'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cita()
    {
        return $this->hasMany(\App\Models\Citum::class, 'id_doctor');
    }
}
