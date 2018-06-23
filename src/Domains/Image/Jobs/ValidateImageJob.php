<?php
namespace App\Domains\Image\Jobs;

use Lucid\Foundation\Job;
use App\Domains\Image\Validators\UploadInputValidator;

class ValidateImageJob extends Job
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
    public function handle(UploadInputValidator $validator)
    {
        return $validator->validate($this->data);
    }
}
