<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\model\loanmodel;
use Log;
use App\Http\Controllers\api\loan as LoanApiController;


class loanApiQueue implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    protected $schemaId;
    protected $leadID;
    protected $updateId;
    protected $loanAmount;
    protected $carid;

    public function __construct($schemaId,$leadID,$updateId,$loanAmount,$carid)
    {
        //
        $this->leadID = $leadID;
        $this->updateId = $updateId;
        $this->loanAmount = $loanAmount;
        $this->carid = $carid;
        $this->schemaId = $schemaId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //app()->call(ApiController::class . '@' . $this->method);
        (new LoanApiController)->loanapitest($this->schemaId,$this->leadID,$this->updateId,$this->loanAmount,$this->carid);
        //loanmodel::doRevokeloantable($updatedata,$updateId);
    }
}
