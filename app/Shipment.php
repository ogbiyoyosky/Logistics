<?php

namespace Framework;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = [
        'shipment_title', 'tracking_code',
    ];

    public function events () {
        return $this->hasMany('Framework\ShipmentEvent');
    }

    public function shipment_media () {
        return $this->hasMany('Framework\ShipmentMedia');
    }
}
