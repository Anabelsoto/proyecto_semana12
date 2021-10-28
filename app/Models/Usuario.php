<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usuario
 * @package App\Models
 * @version October 28, 2021, 2:05 am UTC
 *
 * @property string $ape_nom
 * @property string $usuario
 * @property string $password
 */
class Usuario extends Model
{
    //use SoftDeletes;

    public $table = 'usuario';
    protected $primaryKey='idusuario';
    public $timestamps=false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ape_nom',
        'usuario',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idusuario' => 'integer',
        'ape_nom' => 'string',
        'usuario' => 'string',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ape_nom' => 'nullable|string|max:45',
        'usuario' => 'nullable|string|max:45',
        'password' => 'nullable|string|max:45'
    ];

    
}
