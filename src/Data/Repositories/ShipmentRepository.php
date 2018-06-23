<?php

namespace App\Data\Repositories;

use Framework\Shipment;


/**
 * Base Repository.
 */
class ShipmentRepository extends Repository
{
    /**
     * The model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    public $model;

    public function __construct()
    {
        $this->model = new Shipment;

        parent::__construct($this->model);

    }

   
}
