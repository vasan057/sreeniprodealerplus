<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\api\loan as LoanApiController;

class testController extends Controller
{
    public function loanApi($schemaId,$customerId="",$loanAmount="",$lastid="",$carId="")
    {
    	//$schemaId = "dmschema_14876824222";
    	//(new LoanApiController)->loanapitest($schemaId,$customerId,$loanAmount,$lastid,$carId);
    	$apiResult = new \App\Jobs\loanApiQueue($schemaId,$customerId,$loanAmount,$lastid,$carId);
		dispatch($apiResult);
    }
}
