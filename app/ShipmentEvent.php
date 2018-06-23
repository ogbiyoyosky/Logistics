<?php

namespace Framework;

use Illuminate\Database\Eloquent\Model;

class ShipmentEvent extends Model
{
    protected $fillable = [
        'event', 'shipment_id', 'recipient', 'location', 'sender'
    ];
    public function shipment () {
        return $this->hasOne('Framework\Shipment', 'shipment_id');
    }
}
