<?php

namespace App\Repositories;

use App\Models\Doctor;
use App\Repositories\BaseRepository;

/**
 * Class DoctorRepository
 * @package App\Repositories
 * @version October 27, 2021, 11:44 pm UTC
*/

class DoctorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ape_nom',
        'DNI',
        'especialidad'
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
        return Doctor::class;
    }
}
