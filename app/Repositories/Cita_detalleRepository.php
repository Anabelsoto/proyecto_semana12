<?php

namespace App\Repositories;

use App\Models\Cita_detalle;
use App\Repositories\BaseRepository;

/**
 * Class Cita_detalleRepository
 * @package App\Repositories
 * @version October 27, 2021, 11:20 pm UTC
*/

class Cita_detalleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcita'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Cita_detalle::class;
    }
}
