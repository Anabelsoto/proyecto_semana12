<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cita_detalle
 * @package App\Models
 * @version October 27, 2021, 11:20 pm UTC
 *
 * @property \App\Models\Citum $idcita
 * @property integer $idcita
 */
class Cita_detalle extends Model
{
    //use SoftDeletes;

    public $table = 'cita_detalle';
    protected $PrimaryKey='idcita_detalle';
    public $timestamps=false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idcita'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcita_detalle' => 'integer',
        'idcita' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcita' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idcita()
    {
        return $this->belongsTo(\App\Models\Citum::class, 'idcita');
    }
}
