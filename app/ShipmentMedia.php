<?php

namespace Framework;

use Illuminate\Database\Eloquent\Model;

class ShipmentMedia extends Model
{
    protected $fillable = [
        'filename', 'shipment_id'
    ];
    public function shipment () {
        return $this->hasOne('Framework\Shipment', 'shipment_id');
    }
}
