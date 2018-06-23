<?php
namespace App\Services\Web\Features;
use Illuminate\Support\Facades\DB;
use Framework\Shipment;
use Framework\ShipmentMedia;
use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Domains\Image\Jobs\ValidateImageJob;
use App\Domains\Shipment\Jobs\ValidateInputJob;
use App\Domains\Image\Jobs\StoreToLocationWithNameJob;
use App\Domains\Http\Jobs\SendBackWithErrorJob;
use Symfony\Component\HttpKernel\Exception\HttpException;


class StoreShipmentFeature extends Feature
{
    public function handle(Request $request)
	{
		$image = $request->only('filename');
		$tracking_code = str_random(7);
		$data = $request->except('filename');
		$data = array_add($data, 'tracking_code', $tracking_code);
        
    	try {
				$this->run(ValidateInputJob::class,[
					'data' => $data
				]);
				
				// $this->run(ValidateImageJob::class,[
				// 	'data' => $image
				// ]);

				$formInput = $request->except('filename');
				
				
				$shipment = Shipment::create($data);
		
				if($request->filename !== null){
					$imageName = time().'.'.$request->filename->getClientOriginalExtension();

				
				
			

    			$this->run(StoreToLocationWithNameJob::class,[
    				'name' =>  $imageName,
    				'location' => 'img'
				]);
				
				 $mediaData = [
				 	'filename' => $imageName,
				 	'shipment_id' => $shipment->id
				 ];

				ShipmentMedia::create($mediaData);
				return back()
				->with('path', $imageName)
				->with('success','Successfully created a shipment.');
				} 
			    return back()
				->with('success','Successfully created a shipment.');
				

				
			} 
			catch (ValidationException $e)
    		{
				if ($e instanceof ValidationException) {
					return $this->run(SendBackWithErrorJob::class, [
						'errors' => $e->validator,
						'data' => [
						  'message' => 'You have validation errors',
						  'input' => $request->only('shipment_title')
						]
					]);	
				}
			}
    }	
}
