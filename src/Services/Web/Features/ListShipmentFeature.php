<?php
namespace App\Services\Web\Features;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use App\Domains\Shipment\Jobs\ListAllShipmentJob;


class ListShipmentFeature extends Feature
{
    public function handle(Request $request)
    {
    	try {
		
		
					
		$shipments =	$this->run(ListAllShipmentJob::class)->paginate(10);


			return view('admin.shipment.index', compact('shipments'));


    	
    	} catch (ValidationException $e) {
    		
    	}
    }
}

