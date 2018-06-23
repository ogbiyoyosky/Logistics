<?php
namespace App\Domains\Shipment\Jobs;

use Lucid\Foundation\Job;
use App\Domains\Shipment\Validators\ShipmentInputValidator;


class ValidateInputJob extends Job
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
    public function handle(ShipmentInputValidator $validator)
    {
        return $validator->validate($this->data);
    }
}
