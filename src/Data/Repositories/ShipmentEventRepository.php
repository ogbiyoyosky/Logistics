<?php

namespace App\Data\Repositories;

use Framework\ShipmentEvent;


/**
 * Base Repository.
 */
class ShipmentEventRepository extends Repository
{
    /**
     * The model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    public $model;

    public function __construct()
    {
        $this->model = new ShipmentEvent;
        parent::__construct($this->model);
    }

   
}
