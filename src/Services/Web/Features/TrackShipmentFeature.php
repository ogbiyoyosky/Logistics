<?php
namespace App\Services\Web\Features;
use App\Domains\Tracker\Jobs\ValidateTrackerInputJob;
use Framework\Shipment;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Domains\Http\Jobs\SendBackWithErrorJob;

class TrackShipmentFeature extends Feature
{
    public function handle(Request $request)
    {
        try 
        {
            $data = $request->only('tracking_code');
            $events = [];        
    
            $this->run(ValidateTrackerInputJob::class, [
                'data' => $data
            ]);
    
            $shipments = Shipment::where('tracking_code', $data)->first();
              
            if($shipments !== null)
            {
                $events = $shipments->events;
                $medias = $shipments->shipment_media;
            }                
            return view('tracker.events', compact('shipments','events','data', 'medias'));
        } catch (ValidationException $e)
        {
            return $this->run(SendBackWithErrorJob::class, [
                'errors' => $e->validator,
                'data' => [
                  'message' => 'Please enter a valid tracking code',
                  'input' => $request->input()
                ]
            ]);
        }
        
 
    }
}
