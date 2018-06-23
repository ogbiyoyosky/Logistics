<?php
namespace App\Domains\Image\Jobs;

use Lucid\Foundation\Job;
use Illuminate\Http\Request;


class StoreToLocationWithNameJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $name;
    protected $location;
    public function __construct($name, $location)
    {
        $this->name = $name;
        $this->location = $location;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Request $request)
    {
        $request->filename->move(public_path($this->location),$this->name );
    }
}