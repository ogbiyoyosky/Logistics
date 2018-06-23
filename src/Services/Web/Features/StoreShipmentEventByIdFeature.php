<?php
namespace App\Services\Web\Features;
use Illuminate\Validation\ValidationException;
use App\Domains\Http\Jobs\SendBackWithErrorJob;


use Lucid\Foundation\Feature;
use App\Domains\Event\Jobs\CreateEventByShipmentIdJob;
use Illuminate\Http\Request;

class StoreShipmentEventByIdFeature extends Feature
{
    public function __construct($id)
	{
		    $this->id = $id;
    }
    
    public function handle(Request $request)
    {
        try 
        {

            $data = $request->all();


            $data = array_add($data, 'shipment_id', $this->id);
            
            $this->run(CreateEventByShipmentIdJob::class,[
                'data' => $data
            ]);
            return back()
    		->with('success','Successfully created an event for the shipment');
        } 
        catch (ValidationException $e) 
        {
            return $this->run(SendBackWithErrorJob::class, [
                'errors' => $e->validator,
                'data' => [
                  'message' => 'You have validation errors',
                  'input' => $request->input()
                ]
            ]);
        }
    }
}
