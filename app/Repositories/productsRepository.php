<?php

namespace App\Repositories;

use App\Models\products;
use App\Repositories\BaseRepository;

/**
 * Class productsRepository
 * @package App\Repositories
 * @version October 5, 2021, 1:35 pm UTC
*/

class productsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return products::class;
    }
}
