<?php
namespace App\Domains\Event\Jobs;

use Lucid\Foundation\Job;
use App\Data\Repositories\ShipmentEventRepository;

class CreateEventByShipmentIdJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(ShipmentEventRepository $repo)
    {
        $repo->model->create($this->data);
    }
}
