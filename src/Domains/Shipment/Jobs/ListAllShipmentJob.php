<?php
namespace App\Domains\Shipment\Jobs;
use Lucid\Foundation\Job;
use App\Data\Repositories\ShipmentRepository;
class ListAllShipmentJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        
    }
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(ShipmentRepository $repo)
    {
       return $repo->model->first();
    }
}